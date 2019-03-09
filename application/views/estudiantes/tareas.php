<body id="page-top">
        <div class="container-fluid">
            <center>
          <h1 class="h3 mb-2 text-gray-800">Tareas</h1>
            </center>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tareas asignadas</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Objetivo</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Profesor</th>
                        <th>Fecha límite</th>
                        <th>Tiempo</th>
                        <th>Bitácora</th>
                        <th>Historial</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Objetivo</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Profesor</th>
                        <th>Fecha límite</th>
                        <th>Tiempo</th>
                        <th>Bitácora</th>
                        <th>Historial</th>
                    </tr>
                  </tfoot>
                  <tbody>
                       <?php 
                        $datos = $this->tareas_m->get_tareas_estudiante();
                        foreach($datos as $row)
                        { 
                          echo ($row->estado == 0) ? "<tr class='table-success'>" : "<tr>";
                          echo '
                            <td>'.$this->tareas_m->get_nombre_objetivo_id($row->tarea_padre).'</td>
                            <td>'.$row->nombre.'</td>
                              <td>'.$row->descripcion.'</td>
                            <td>'.$this->tareas_m->get_nombre_persona($row->id_persona).'</td>
                            <td>'.$row->fecha_limite.' </td>';
                            if ($row->tiempo < 0){
                                echo '<td class="btn-danger">'.$row->tiempo.'</td>';
                            }else{
                                echo '<td >'.$row->tiempo.'</td>';
                            }
                            echo '
                                <td>
                                '.(($row->estado != 0) ? '<a href="bitacora/'.$row->id.'" class="btn btn-success">Bitácora</a>' : '<a href="#" class="btn btn-success">Bitácora</a>').'
                                </td>
                                <td>
                                  <a href="historial/'.$row->id.'" class="btn btn-warning">Historial</a>
                                </td>
                          </tr>';
                        }
                        ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>