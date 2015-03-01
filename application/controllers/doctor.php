<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doctor extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        if(!is_logged_in())
        {
            $this->load->view('login');
        }else
        {
            $this->load->view('doctor_home');
        }

    }

    public function get_patient()
    {

        $patient_id=$this->input->post("patient_id");

        $this->load->model('doctor_model');
        $visit=$this->doctor_model->get_visit($patient_id);

        if($visit)
        {
            $this->load->model('reception_model');
            $patient=$this->reception_model->get_patient($patient_id);
            $data['patient']=$patient;

            $medical_profile=$this->doctor_model->get_medical_profile($visit[0]->visit_id);
            $data['medical_profile']=$medical_profile;

            $prescription=$this->doctor_model->get_prescription($visit[0]->visit_id);
            $data['prescription']=$prescription;

            $diagnosis=$this->doctor_model->get_diagnosis($visit[0]->visit_id);
            $data['diagnosis']=$diagnosis;

            $lab_tests=$this->doctor_model->get_lab_tests($visit[0]->visit_id);
            $data['lab_tests']=$lab_tests;

            $data['visit']=$visit;

            $this->load->view('doctor',$data);
        }else{
            $this->load->view('doctor_patient');
        }

        //echo($patient_id);
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */