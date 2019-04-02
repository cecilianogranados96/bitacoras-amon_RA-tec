<?php $data_registro = 
    array(
    array('type' => 'text','name' => 'nombre','placeholder' => 'Digite su nombre completo ','class' => 'form-control form-control-user'),
    array('type' => 'email','name' => 'email','placeholder' => 'Digite su email','class' => 'form-control form-control-user'),
    array('type' => 'password','name' => 'password','placeholder' => 'Digite su contraseña','class' => 'form-control form-control-user')
    );

?>

<body class="bg-gradient-primary">
    <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crear una cuenta</h1>
                            </div>
                            <?= form_open('login/registrarse',"class = 'user' "); ?>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <?= form_input($data_registro[0]); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <?= form_input($data_registro[1]); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <?= form_input($data_registro[2]); ?>
                                    </div>
                                </div>
                                <?=form_submit("Registrarse",'Registrarse', "class = 'btn btn-primary btn-user btn-block' "); ?>
                                    <hr>
                                    <a href="<?php echo base_url(); ?>" class="btn btn-danger btn-user btn-block">
                      Ya tienes cuenta, ingresa
                    </a>
                                    <?=form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
