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

    function patient_history($patient_no)
    {

        $this->load->model('patient_model');
        $history=$this->patient_model->get_patient_history($patient_no);
        $data['history']=$history;
        $this->load->view('patient_history',$data);

    }


}