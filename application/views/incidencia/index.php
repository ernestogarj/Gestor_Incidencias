<div id="page-content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <h3>Mis Incidencias En Proceso</h3>
      <hr/>
      <?php echo $this->session->flashdata('success_msg_add'); ?>
      <?php echo $this->session->flashdata('success_msg_edit'); ?>
      
      <div class="col-md-12">
<!--Boton nuevas incidencias-->
        <div class="pull-right">
	         <a href="<?php echo site_url('incidencia/add'); ?>" class="btn btn-success">Nueva Incidencia</a> 
        </div>
<br><br>
<!--Fin Boton-->

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
          <a href="<?php echo site_url('incidencia/edit/'.$i['id']); ?>" class="btn btn-primary btn-block">Ver/Editar</a><br/> 
        </div>
      </div>

	<?php endforeach; ?>
<!--Fin listado incidencias-->
</div>
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
</body>
</html>