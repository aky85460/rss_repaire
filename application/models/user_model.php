<?php
class User_model extends CI_Model{
	public function new_user(){
		$name=$this->input->post('name');
		$contact=$this->input->post('contact');
		$email=$this->input->post('email');
		$passwp=$this->input->post('password');
		$user=$this->db->insert('user',['name'=>$email,'contact'=>$contact,'email'=>$email,'password'=>$password]);
		if($user){ return true; }
		else{ return false; }
	}
}