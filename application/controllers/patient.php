<?php

class Patient extends Im_Controller
{
    private $data;
    protected $before_filter = array(
        'action' => 'is_logged_in',
        'except' => array()
    );
	function index()
	{

	}

    function reports()
    {
        $this->load->model('patient_model');
        $malaria=$this->patient_model->get_malaria_total();
        $data['malaria']=$malaria;
        $this->load->view('reports',$data);
    }

    function patient_history($patient_no)
    {

        $this->load->model('patient_model');
        $history=$this->patient_model->get_patient_history($patient_no);
        $data['history']=$history;
        $this->load->view('patient_history',$data);

    }
    function all()
    {
        $staff_id=$this->session->userdata('user_id');
        $role=$this->session->userdata('role');


    }

    function by_id()
    {


        $this->load->view('search_by_id');

    }


}