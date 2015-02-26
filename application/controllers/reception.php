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
            $this->load->view('reception');
        }

    }

    public function new_patient()
    {
        $name=$this->input->post('name');
        $sex=$this->input->post('sex');
        $dob=$this->input->post('dob');
        $phone=$this->input->post('phone');
        $email=$this->input->post('email');
        $address=$this->input->post('address');
        $insured=$this->input->post('insured');
        $nhif=$this->input->post('nhif');

        echo('i was called, here i am!');
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */