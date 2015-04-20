<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lab extends  Im_Controller
{
    private $data;
    protected $before_filter = array(
        'action' => 'is_lab_attendant',
        'except' => array()
    );
    public function index()
    {
        if(!is_logged_in())
        {
            $this->load->view('login');
        }else
        {
            $this->load->view('lab_home');
        }

    }



    public function get_patient($patient_id)
    {


        //$patient_id=$this->input->post('patient_id');

        $this->load->model('doctor_model');
        $visit=$this->doctor_model->get_visit_lab($patient_id);

        if($visit)
        {
            $this->load->model('reception_model');
            $patient=$this->reception_model->get_patient($patient_id);
            $data['patient']=$patient;

            $lab_tests=$this->doctor_model->get_lab_tests($visit[0]->visit_id);
            $data['lab_tests']=$lab_tests;

            $data['visit']=$visit;
            $data['visit_id']=$visit[0]->visit_id;

            $this->load->view('lab',$data);
        }else{
            $this->load->view('lab_patient');
        }

        //echo($patient_id);
    }

    public function send_to_doctor($visit_id)
    {

        $this->load->model('doctor_model');
        $this->doctor_model->go_to_doctor($visit_id);
        $this->load->view('lab_home');

    }

    public function save_lab_result()
    {
        $test_result=$this->input->post('test_result');
        $test_id=$this->input->post('test_id');
        $staff_id=$this->session->userdata('user_id');
        $this->load->model('doctor_model');
        $this->doctor_model->save_lab_result($test_id,$test_result,$staff_id);
    }


    public function do_upload($patient_id)
    {

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'png|jpg|jpeg';
        $config['max_size']	= '5000000000';
        //$config['file_name']=md5(time()).".pdf";

        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());

            redirect(base_url()."lab/get_patient/".$patient_id);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $pic=$this->upload->data()['file_name'];
            //$result=$this->input->post('result');

            $test_result=$this->input->post('result');
            $test_id=$this->input->post('test_id');
            $staff_id=$this->session->userdata('user_id');
            $this->load->model('doctor_model');
            $this->doctor_model->save_lab_result($test_id,$test_result,$staff_id,$pic);

            redirect(base_url()."lab/get_patient/".$patient_id);
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */