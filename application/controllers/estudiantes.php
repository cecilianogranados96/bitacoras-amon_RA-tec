<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiantes extends CI_Controller {
    
	public function index()
	{
		$this->load->view('header');
        $this->load->model('tareas_m');
        $this->load->view('estudiantes/menu_estudiantes');
		$this->load->view('estudiantes/tareas');
        $this->load->view('fotter');
	}
    
	public function cuenta()
	{
		$this->load->view('header');
        $this->load->view('estudiantes/menu_estudiantes');
		$this->load->view('cuenta');
        $this->load->view('fotter');
	}
    

        public function historial()
	{
        $this->load->view('header');
        $this->load->model('tareas_m');
        $this->load->view('estudiantes/menu_estudiantes');
		$this->load->view('profesores/bitacora');
        $this->load->view('fotter');
	}
    
    
    public function bitacora()
	{
        $this->load->view('header');
        $this->load->model('bitacora_m');
        $this->load->view('estudiantes/menu_estudiantes');
		$this->load->view('estudiantes/bitacora');
        $this->load->view('fotter');
	}
    
       public function registro_bitacora()
	{
        $this->load->model('bitacora_m');
        $this->bitacora_m->registrar();
	}
    
    
    
    
}