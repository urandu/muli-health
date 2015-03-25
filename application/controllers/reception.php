<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reception extends  Im_Controller
{
    private $data;
    protected $before_filter = array(
        'action' => 'is_receptionist',
        'except' => array()
    );

    public function index()
    {
        if(!is_logged_in())
        {
            $this->load->view('login');
        }else
        {
            $this->load->view('reception_home');
        }

    }

    public function new_patient()
    {
        $patient_id=$this->input->post('patient_id');
        $name=$this->input->post('name');
        $sex=$this->input->post('sex');
        $dob=$this->input->post('dob');
        $phone=$this->input->post('phone');
        $email=$this->input->post('email');
        $address=$this->input->post('address');
        $insured=$this->input->post('insured');
        $nhif=$this->input->post('nhif');
        $sir_name=$this->input->post('sir_name');
        $id_num=$this->input->post('id_num');


        //load reception model
        $this->load->model('reception_model');
        $this->reception_model->new_patient($patient_id,$name,$sex,$dob,$phone,$email,$address,$insured,$nhif,$sir_name,$id_num);
        $this->load->view('reception_home');

    }



    public function get_patient()
    {

        $patient_id=$this->input->post("patient_id");
        if(!$patient_id)
        {
            $this->load->view('reception_home');
            return false;
        }
        $this->load->model('reception_model');
        $patient=$this->reception_model->get_patient($patient_id);
        if($patient)
        {
            $data['patient']=$patient;
            $data['visit_status']=$this->reception_model->check_visit_status($patient_id);
            $this->load->view('reception_patient', $data);
        }
        else
        {
            $data['message_error'] = TRUE;
            $this->load->view('reception', $data);
        }
    }

    public function start_visit($patient_id)
    {
        $this->load->model('reception_model');
        if(!$this->reception_model->check_visit_status($patient_id))
        {
            $this->reception_model->start_visit($patient_id);
        }
        //$this->reception_model->start_visit($patient_id);
        $this->load->view('reception_home');

    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */