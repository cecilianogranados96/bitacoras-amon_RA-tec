<?php $data_email = array(
            array(
                'type' => 'text',
                'name' => 'nombre_bitacora',
                'placeholder' => 'Digite el nombre de la tarea que realizó',
                'class' => 'form-control form-control-user',
            )
        );
?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Nueva bitácora</h1>
    </div>
    <div class="row">
        <div class="col-lg-4 mb-4">
        </div>
        <div class="col-lg-4 mb-4">
            <?= form_open_multipart('estudiantes/registro_bitacora/'.$this->uri->segment(3).'',"class = 'user' "); ?>
                <div class="form-group">
                    Nombre de la tarea:
                    <?= form_input($data_email[0]); ?>
                </div>
                <div class="form-group">
                    Porcentaje de avance:
                    <?= $this->bitacora_m->maximo_porcentaje(); ?>
                </div>
                <div class="form-group">
                    Evidencia:
                    <input type="file" name="archivos[]" size="20" class="form-control" multiple />
                </div>
                    <div class="form-group">
                        Descripción de la tarea:
                        <?= form_textarea("descripcion_bitacora","",'class="form-control"'); ?>
                    </div>
                    <?=form_submit("Registrar",'Registrar', "class = 'btn btn-primary btn-user btn-block' "); ?>
                    <?=form_close(); ?>
            *En caso de ser mas de tres archivos subir un .zip
        </div>
    </div>
</div>