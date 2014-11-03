<?php

Class Welcome extends CI_Controller{

	public function index(){
		$this->load->view('welcome_hmvc');
	}

}