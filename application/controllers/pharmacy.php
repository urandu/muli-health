<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pharmacy extends CI_Controller {


    public function index()
    {
        if(!is_logged_in())
        {
            $this->load->view('login');
        }else
        {
            $this->load->view('pharmacy_home');
        }

    }

    public function get_patient($patient_id)
    {

        // $patient_id=$this->input->post("patient_id");

        $this->load->model('doctor_model');
        $visit=$this->doctor_model->get_visit($patient_id);

        if($visit)
        {
            $this->load->model('reception_model');
            $patient=$this->reception_model->get_patient($patient_id);
            $data['patient']=$patient;

            $allergies=$this->doctor_model->get_allergies($patient_id);
            $data['allergies']=$allergies;


            $prescription=$this->doctor_model->get_prescription($visit[0]->visit_id);
            $data['prescription']=$prescription;




            $data['visit']=$visit;
            $data['visit_id']=$visit[0]->visit_id;

            $this->load->view('pharmacy',$data);
        }else{
            $this->load->view('pharmacy_patient');
        }

        //echo($patient_id);
    }





    public function end_visit($visit_id)
    {

        $this->load->model('doctor_model');
        $this->doctor_model->end_visit($visit_id);
        $this->load->view('pharmacy_home');

    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */