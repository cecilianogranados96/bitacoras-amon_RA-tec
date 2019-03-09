<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
    
	public function index()
	{
        $this->load->model('registro_model');
        $this->load->view('header');
		$this->load->view('registro');
	}	
}