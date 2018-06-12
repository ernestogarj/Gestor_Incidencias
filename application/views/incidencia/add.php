<div id="page-content-wrapper">
  <div class="container-fluid">
    <div class="row">
    	<h4>Añadir Una Nueva Incidencia</h4>
    	<hr/>
      <div class="col-md-offset-2 col-md-6">
<?php echo validation_errors(); ?>
<?php echo form_open('incidencia/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="titulo" class="col-md-4 control-label">Titulo</label>
		<div class="col-md-8">
			<input type="text" name="titulo" value="<?php echo $this->input->post('titulo'); ?>" class="form-control" id="titulo" />
		</div>
	</div>
	<div class="form-group">
		<label for="descripcion" class="col-md-4 control-label">Descripcion</label>
		<div class="col-md-8">
			<textarea name="descripcion" class="form-control" id="descripcion"><?php echo $this->input->post('descripcion'); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Reportar Incidencia</button>
        </div>
	</div>
<?php echo form_close(); ?>
</div>
</div>
</div>
</div>
</div><!--Menu-->
</body>
</html>