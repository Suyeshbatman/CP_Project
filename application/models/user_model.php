<?php

class Model_Customer extends CI_Model{
	public function register($FirstName,$LastName,$Address,$Contact,$Email,$Username,$Password){
								
		$array=array(
			"FirstName"=>$FirstName,
			"LastName"=>$LastName,
			"Address"=>$Username,
			"Contact"=>$Password,
			"Email"=>$Email,
			"Username"=>$Username,
			"Password"=>$Password



            
		);
		$this->db->insert("user_registration",$array); //Active Records
		return "Data saved";
	}
