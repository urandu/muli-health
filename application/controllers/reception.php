<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reception extends CI_Controller {

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

        //load reception model
        $this->load->model('reception_model');
        $this->reception_model->new_patient($patient_id,$name,$sex,$dob,$phone,$email,$address,$insured,$nhif);

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