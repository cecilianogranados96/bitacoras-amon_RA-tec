<div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                    <br>
        <br>
        <center>
        <img src="<?php echo base_url(); ?>/dist/img/logo_transparente.png" style="width: 75%;">
        </center><br>
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>index.php/profesores">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Profesores </div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/profesores/">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Inicio</span></a>
        </li>
             <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/profesores/importador">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Importador</span></a>
        </li>
        
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Proyectos
        </div>
        
        <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/profesores/objetivos">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Objetivos</span></a>
        </li>
      
        <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/profesores/nuevo_objetivo">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Nuevo Objetivo</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/profesores/nueva_tarea">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Nueva Tarea</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Usuarios
        </div>
        <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/profesores/usuarios">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Usuarios</span></a>
        </li>
        
        
        
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Perfil personal
        </div>
        <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/profesores/cuenta">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Cuenta</span></a>
            <a class="nav-link" href="#" data-target="#logoutModal"  data-toggle="modal">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Salir</span></a>
            
            
        </li>
    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <?= fecha(); ?>
                </div>
                
                 <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                     <h6>Hola, <?= nombre_persona() ?></h6>
                </span>
                    
              
            </nav>
