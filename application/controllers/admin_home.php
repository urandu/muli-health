<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_home extends  Im_Controller
{
    private $data;
    protected $before_filter = array(
        'action' => 'is_admin',
        'except' => array()
    );
    public function index()
    {

        $this->load->model('doctor_model');
        $lab_test_names=$this->doctor_model->get_lab_test_names();
        $drugs=$this->doctor_model->get_all_drugs();
        $diseases=$this->doctor_model->get_all_diseases();
        $allergy_names=$this->doctor_model->get_allergy_names();

        $data['lab_test_names']=$lab_test_names;
        $data['allergy_names']=$allergy_names;
        $data['diseases']=$diseases;
        $data['drugs']=$drugs;
            $this->load->view('admin_home',$data);


    }

    public function new_user()
    {
        $this->load->view('new_user');
    }

    public function new_s()
    {

        $name=$this->input->post('name');
        $phone=$this->input->post('phone');
        $dob=$this->input->post('dob');
        $gender=$this->input->post('gender');
        $id_number=$this->input->post('id_number');
        $role=$this->input->post('role');
        $password=$this->input->post('password');
        $email=$this->input->post('email');
        $user_name=$this->input->post('user_name');

        $this->load->model('user_model');

        if($this->user_model->new_user($name,$phone,$dob,$gender,$id_number,$role,$password,$email,$user_name))
        {
            $data['flash_message']=TRUE;

            $this->load->view('new_user', $data);
        }
    }

    public function add_drug()
    {

        $drug_name=$this->input->post('drug_name');
        $drug_price=$this->input->post('price');
        $stock=50;
        $this->load->model('doctor_model');
        $this->doctor_model->add_drug($drug_name,$drug_price,$stock);
    }


    public function add_lab_test_name()
    {

        $test_name=$this->input->post('test_name');
        $test_cost=$this->input->post('test_cost');

        $this->load->model('doctor_model');
        $this->doctor_model->add_lab_test_name($test_name,$test_cost);
    }


    public function add_disease()
    {

        $disease_name=$this->input->post('disease_name');
        $this->load->model('doctor_model');
        $this->doctor_model->add_disease($disease_name);
    }

    public function add_allergy_name()
    {

        $allergy_name=$this->input->post('allergy_name');
        $this->load->model('doctor_model');
        $this->doctor_model->add_allergy_name($allergy_name);
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */