<div id="page-content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <h3>Incidencias Sin Asignar</h3>
      <hr/>
      <?php echo $this->session->flashdata('success_msg_asignar'); ?>
      <?php echo $this->session->flashdata('success_msg_delete'); ?>
      <?php echo $this->session->flashdata('success_msg_edit'); ?>
      <div class="col-md-12">

<!--Listado incidencias-->
<?php foreach($incidencias as $i): ?>
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="row">
            <div class="col-md-2">
              <p><b>Usuario:</b> <?php echo $i['nombre'].'&nbsp;'.$i['apellidos']?></p>
            </div>

            <div class="col-md-2">
              <p><b>Departamento:</b> <?php echo $i['departamento']; ?></p>
            </div>

            <div class="col-md-2">
              <p><b>Fecha:</b> <?php echo $i['fecha']; ?></p>
            </div>

             <div class="col-md-2">
              <p><b>Estado:</b> <?php echo $i['estado']; ?></p>
            </div>
          </div>
         </div>
      <div class="panel-body">
        <div class="col-md-10">
          <p><b>Titulo Incidencia:</b> <?php echo $i['titulo']; ?><p>
          <p><b>Descripcion Incidencia:</b> <?php echo $i['descripcion']; ?></p>
        </div>
        <div class="col-md-2">
          <a href="<?php echo site_url('incidencia/edit/'.$i['id']); ?>" class="btn btn-primary btn-block">Editar</a><br/> 
          <button type="button" class="btn btn-warning btn-block btnasginar" data="<?php echo $i['id']; ?>" data-toggle="modal" data-target="#asignarmodal">Asignar</button>
          <button type="button" class="btn btn-danger btn-block btneliminar" data="<?php echo site_url('incidencia/remove/'.$i['id']); ?>" data-toggle="modal" data-target="#eliminarmodal">Eliminar</button>
        </div>
    </div>
    </div>
	<?php endforeach; ?>
<!--Fin listado incidencias-->

<!--Modal Asignar tecnico-->
<div class="modal fade" id="asignarmodal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Asignar Incidencia</h4>
        </div>
        <div class="modal-body">
        <h4>Carga de trabajo por Técnicos</h4>
        <?php foreach($numero_incidencias_tecnico as $numero): ?>
          <p><?php echo $numero['nombre'].'&nbsp;'.$numero['apellidos'].':'.'<br/>'; ?></p>
          <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="<?php echo 'width:'.$numero['numero'].'0'.'%';?>"><?php echo $numero['numero'].'&nbsp;'.'Incidencias'; ?>
            </div>
           </div>
        <?php endforeach; ?>
          <?php echo form_open('incidencia/asignar_incidencia',array("class"=>"form-horizontal")); ?>
            <div class="form-group">
              <label for="tecnico" class="col-md-4 control-label">Seleccione un técnico</label>
              <div class="col-md-8">
                <select name="tecnico" class="form-control">
                  <?php foreach($tecnicos as $u): ?>
                    <option value="<?php echo $u['id']; ?>"><?php echo $u['nombre'].'&nbsp;'.$u['apellidos']; ?></option>
                  <?php endforeach; ?>
                </select>
                <input type="hidden" id="idincidencia" name="incidencia" value="">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" class="btn btn-success">Asignar Tecnico</button>
              </div>
            </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
</div>
<!--Fin modal asignar tecnico-->
<!--Modal Eliminar Incidencia-->
      <div class="modal fade" id="eliminarmodal" role="dialog">
      <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Eliminar Incidencia</h4>
        </div>
        <div class="modal-body">
          <p>¿Está seguro que desea de eliminar esta incidencia del sistema?</p>
          <a href="" class="btn btn-success dellink">Eliminar</a>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
        <div class="modal-footer">
        </div>
      </div>
      </div>
      </div> 
<!--Fin Eliminar Incidencia-->
</div>
</div>
</div>
</div><!--Menu-->
</div>


<script>
$('.btnasginar').click(function() { 
    var id = $(this).attr('data');
   $("#idincidencia").prop("value", id);
});
</script>
<script>
$('.btneliminar').click(function() { 
    var id = $(this).attr('data');
   $('.dellink').prop("href", id);
});
</script>

</body>
</html>