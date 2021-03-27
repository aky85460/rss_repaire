<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	

  public function __construct(){
  	parent::__construct();
  	// $this->load->library('form_validation');
  	
  }
    public function Index(){
		$this->load->view('Home/index');
	}
	public function About(){
		$this->load->view('Home/About');
	}
	public function Blog(){
		$this->load->view('Home/Blog');
	}
	public function Course(){
		$this->load->view('Home/Courses');
	}
	public function Teacher(){
		$this->load->view('Home/Teacher');
	}
	public function Contact(){
		$this->load->view('Home/Contact');
	}

	public function Register(){
		$this->load->view('Home/Register');
	}

	public function New_user(){
		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('contact','Contact','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required');
		$this->form_validation->set_rules('passwp','Password','trim|required');
		$this->form_validation->set_rules('city','City','trim|required',array('required' => 'You must provide a %s.'));

		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		$this->form_validation->set_message('required', 'Enter %s');

		if($this->form_validation->run()==FALSE){ 
			$this->load->view('Home/Register');
		}
		else{
			$em=$this->input->post('email');
			$this->db->where('email',$em);
			$res=$this->db->get('user');
			if($res->num_rows()>0){
				$this->session->set_flashdata('msg_noti','this email is already register');
				$this->load->view('Home/Register');
			}
			else{
				$check=$this->user_model->new_user();
				if($check!=false){
					$this->session->set_flashdata('msg_err','Registration is Successful');
					$this->load->view('Home/Index');
				}
				else{
					$this->session->flash_data('msg_err','Registration is Unsuccessful');
					$this->load->view('Home/Register');
				}
			}
		}



	}


}