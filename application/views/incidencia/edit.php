<div id="page-content-wrapper">
  <div class="container-fluid">
    <div class="row">
    	<h4>Editar Incidencia</h4>
    	<hr/>
      <div class="col-md-12">
<?php echo validation_errors(); ?>
<?php echo form_open('incidencia/edit/'.$incidencia['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="titulo" class="col-md-4 control-label">Titulo</label>
		<div class="col-md-4">
			<input type="text" name="titulo" value="<?php echo ($this->input->post('titulo') ? $this->input->post('titulo') : $incidencia['titulo']); ?>" class="form-control" id="titulo" />
		</div>
	</div>
	<div class="form-group">
		<label for="descripcion" class="col-md-4 control-label">Descripcion</label>
		<div class="col-md-4">
			<textarea class="form-control" name="descripcion"><?php echo ($this->input->post('descripcion') ? $this->input->post('descripcion') : $incidencia['descripcion']); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Guardar</button>
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