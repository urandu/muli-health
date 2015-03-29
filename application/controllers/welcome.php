<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
        }else {


           $role= $this->session->all_userdata()['role'];

            if($role==0)
            {
                redirect('doctor');
            }
            elseif($role==1)
            {
                redirect('reception');
            }
            elseif($role==2)
            {
                redirect('lab');
            }
            elseif($role==3)
            {
                redirect('pharmacy');
            }
            elseif($role==4)
            {
                redirect('finance');
            } elseif($role==-1)
            {
                redirect('admin');
            }
            else
            {
                show_404();
            }
        }

	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */