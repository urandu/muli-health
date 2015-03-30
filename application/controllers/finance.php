<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Finance extends  Im_Controller
{
    private $data;
    protected $before_filter = array(
        'action' => 'is_accounts',
        'except' => array()
    );
    public function index()
    {
        if(!is_logged_in())
        {
            $this->load->view('login');
        }else
        {
            $this->load->view('finance_home');
        }

    }

    public function get_patient($patient_id)
    {

        //$patient_id=$this->input->post("patient_id");

        $this->load->model('doctor_model');
        $visit=$this->doctor_model->get_visit_finance($patient_id);

        if($visit)
        {
            $this->load->model('reception_model');
            $patient=$this->reception_model->get_patient($patient_id);
            $data['patient']=$patient;


            $lab_tests=$this->doctor_model->get_lab_tests($visit[0]->visit_id);
            $data['lab_tests']=$lab_tests;

            $prescription=$this->doctor_model->get_prescription($visit[0]->visit_id);
            $data['prescription']=$prescription;




            $data['visit']=$visit;
            $data['visit_id']=$visit[0]->visit_id;

            $this->load->view('finance',$data);
        }else{
            $this->load->view('finance_patient');
        }

        //echo($patient_id);
    }





    public function go_to_pharmacy($visit_id)
    {

        $this->load->model('doctor_model');
        $this->doctor_model->go_to_pharmacy($visit_id);
        $this->load->view('finance_home');

    }


    public function accept_payment()
    {
        $visit_id=$this->input->post('visit_id');
        $staff_id=$this->session->userdata('user_id');

        $amount_paid=$this->input->post('amount_paid');
        $this->load->model('doctor_model');
        $this->doctor_model->accept_payment($visit_id,$staff_id,$amount_paid);
        $this->doctor_model->go_to_pharmacy($visit_id);
        $this->load->view('finance_home');
    }



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */