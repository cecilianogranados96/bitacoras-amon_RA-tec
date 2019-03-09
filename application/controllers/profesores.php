<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profesores extends CI_Controller {
    
	public function index()
	{
        $this->load->view('header');
        $this->load->model('objetivos_m');
        $this->load->view('profesores/menu_profesores');
		$this->load->view('profesores/objetivos');
        $this->load->view('fotter');
	}
    
    public function nuevo_objetivo()
	{
        $this->load->view('header');
        $this->load->view('profesores/menu_profesores');
		$this->load->view('profesores/nuevo_objetivo');
        $this->load->view('fotter');
	}
    
    public function importador()
	{
        $this->load->view('header');
        $this->load->view('profesores/menu_profesores');
		$this->load->view('profesores/importador');
        $this->load->view('fotter');
	}

    public function proceso_importacion()
	{
        $this->load->model('importador_m');
        $this->importador_m->proceso_importacion();
	}
    
    public function registrar_objetivo(){
        $this->load->model('objetivos_m');
        $this->objetivos_m->registrar_objetivo();
    }
    
    public function nueva_tarea()
	{
        $this->load->view('header');
        $this->load->model('tareas_m');
        $this->load->view('profesores/menu_profesores');
		$this->load->view('profesores/nueva_tarea');
        $this->load->view('fotter');
	}
    
    public function objetivos()
	{
        $this->load->view('header');
        $this->load->model('objetivos_m');
        $this->load->view('profesores/menu_profesores');
		$this->load->view('profesores/objetivos');
        $this->load->view('fotter');
	}
    
    public function proyectos_archivados()
	{
        $this->load->view('header');
        $this->load->view('profesores/menu_profesores');
		$this->load->view('profesores/proyectos_archivados');
        $this->load->view('fotter');
	}
    
    public function tareas()
	{
        $this->load->view('header');
        $this->load->model('tareas_m');
        $this->load->view('profesores/menu_profesores');
		$this->load->view('profesores/tareas');
        $this->load->view('fotter');
	}
    
    public function usuarios()
	{
        $this->load->view('header');
        $this->load->model('login_m');
        $this->load->view('profesores/menu_profesores');
		$this->load->view('profesores/usuarios');
        $this->load->view('fotter');
	}
    
    public function modificar_usuario()
	{
        $this->load->view('header');
        $this->load->model('login_m');
        $this->load->view('profesores/menu_profesores');
		$this->load->view('profesores/modificar_usuario');
        $this->load->view('fotter');
	} 
    
    public function actualizar_usuario()
	{
        $this->load->model('login_m');
        $this->login_m->actualizar_usuario();
	}
        
    public function asignar_tarea()
	{
        $this->load->view('header');
        $this->load->model('tareas_m');
        $this->load->view('profesores/menu_profesores');
		$this->load->view('profesores/asignar_tarea');
        $this->load->view('fotter');
	}
    
    public function procesar_asignar_tarea()
	{
        $this->load->model('tareas_m');
        $this->tareas_m->procesar_asignar_tarea();
	}
    
    
    public function bitacora()
	{
        $this->load->view('header');
        $this->load->model('tareas_m');
        $this->load->view('profesores/menu_profesores');
		$this->load->view('profesores/bitacora');
        $this->load->view('fotter');
	}
    
    public function cuenta()
	{
        $this->load->view('header');
        $this->load->view('profesores/menu_profesores');
		$this->load->view('cuenta');
        $this->load->view('fotter');
	}
    
}
