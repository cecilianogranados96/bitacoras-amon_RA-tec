<div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <br>
        <br>
        <center>
        <img src="<?php echo base_url(); ?>/dist/img/logo_transparente.png" style="width: 75%;">
        </center><br>
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>index.php/estudiantes">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Estudiantes</div>
        </a>
        <hr class="sidebar-divider my-0">
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Proyectos
        </div>
        <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/estudiantes/">
          <i class="fas fa-fw fa-project-diagram"></i>
          <span>Tareas</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Perfil personal
        </div>
           <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/estudiantes/cuenta">
          <i class="fas fa-fw fa-users-cog"></i>
          <span>Cuenta</span></a>
            <a class="nav-link" href="#" data-target="#logoutModal"  data-toggle="modal">
          <i class="fas fa-fw fa-sign-in-alt"></i>
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