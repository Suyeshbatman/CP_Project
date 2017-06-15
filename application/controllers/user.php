<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function register(){
		
			$FirstName=$this->input->post('FirstName');
			$LastName=$this->input->post('LastName');
			$Address=$this->input->post('Address');
			$Contact=$this->input->post('Contact');
			$Email=$this->input->post('Email');
			$Username=$this->input->post('Username');
			$Password=$this->input->post('Password');

			$this->load->model('user_model');
			
			$data['message']=$this->user_model->register
							($FirstName,$LastName,$Address,$Contact,$Email,
							$Username,$Password);
							
			// $this->load->view('login');
			echo "successfull";
		} 




		public function booking()
		{
			
		}
	}