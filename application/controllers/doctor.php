<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doctor extends  Im_Controller
{
    private $data;
    protected $before_filter = array(
        'action' => 'is_doctor',
        'except' => array()
    );
    public function index()
    {

            $this->load->view('doctor_home');


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

            $allergies=$this->doctor_model->get_allergies($patient_id);
            $data['allergies']=$allergies;

            $medical_profile=$this->doctor_model->get_medical_profile($visit[0]->visit_id);
            $data['medical_profile']=$medical_profile;

            $prescription=$this->doctor_model->get_prescription($visit[0]->visit_id);
            $data['prescription']=$prescription;

            $diagnosis=$this->doctor_model->get_diagnosis($visit[0]->visit_id);
            $data['diagnosis']=$diagnosis;

            $lab_tests=$this->doctor_model->get_lab_tests($visit[0]->visit_id);
            $data['lab_tests']=$lab_tests;

            $drugs=$this->doctor_model->get_all_drugs();
            $data['drugs']=$drugs;

            $diseases=$this->doctor_model->get_all_diseases();
            $data['diseases']=$diseases;

            $allergy_names=$this->doctor_model->get_allergy_names();
            $data['allergy_names']=$allergy_names;

            $lab_test_names=$this->doctor_model->get_lab_test_names();
            $data['lab_test_names']=$lab_test_names;

            $data['visit']=$visit;
            $data['visit_id']=$visit[0]->visit_id;



            $this->load->view('doctor',$data);
        }else{
            $this->load->view('doctor_patient');
        }

        //echo($patient_id);
    }



    function patient_history($patient_no)
    {

        $this->load->model('patient_model');
        $history=$this->patient_model->get_patient_history($patient_no);
        $data['history']=$history;
        $this->load->view('patient_history',$data);

    }

    public function add_allergy()
    {
        $allergy=$this->input->post('allergy');
        $patient_id=$this->input->post('patient_id');
        $visit_id=$this->input->post('visit_id');

        $this->load->model('doctor_model');
        $this->doctor_model->add_allergy($allergy,$patient_id,$visit_id);
        echo $this->doctor_model->get_allergy_name($allergy);

    }


    public function add_prescription()
    {
        $prescription=$this->input->post('prescription');
        $patient_id=$this->input->post('patient_id');
        $visit_id=$this->input->post('visit_id');
        $staff_id=$this->session->userdata('user_id');
        $this->load->model('doctor_model');
        $this->doctor_model->add_prescription($prescription,$patient_id,$visit_id,$staff_id);
        echo $this->doctor_model->get_drug_name($prescription);

    }

    public function add_diagnosis()
    {
        $diagnosis=$this->input->post('diagnosis');
        $patient_id=$this->input->post('patient_id');
        $visit_id=$this->input->post('visit_id');
        $staff_id=$this->session->userdata('user_id');
        $this->load->model('doctor_model');
        $this->doctor_model->add_diagnosis($diagnosis,$patient_id,$visit_id,$staff_id);
        echo $this->doctor_model->get_disease_name($diagnosis);

    }

    public function add_lab_test()
    {
        $test_done=$this->input->post('test_done');
        $patient_id=$this->input->post('patient_id');
        $visit_id=$this->input->post('visit_id');

        $this->load->model('doctor_model');
        $this->doctor_model->add_test_done($test_done,$patient_id,$visit_id);
        echo $this->doctor_model->get_lab_test_name($test_done);

    }

    public function add_medical_profile()
    {
        $present_complaint=$this->input->post('present_complaint');
        $complaint_history=$this->input->post('complaint_history');
        $patient_id=$this->input->post('patient_id');
        $visit_id=$this->input->post('visit_id');
        $staff_id=$this->session->userdata('user_id');
        $this->load->model('doctor_model');
        $this->doctor_model->add_medical_profile($present_complaint,$complaint_history,$patient_id,$visit_id,$staff_id);

    }

    public function send_to_lab($visit_id)
    {

        $this->load->model('doctor_model');
        $this->doctor_model->go_to_lab($visit_id);
        $this->load->view('doctor_home');

    }



    public function send_to_accounts($visit_id)
    {

        $this->load->model('doctor_model');
        $this->doctor_model->go_to_accounts($visit_id);
        $this->load->view('doctor_home');

    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */