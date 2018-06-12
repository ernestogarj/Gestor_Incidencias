<div id="page-content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <h3>Mi Cuenta</h3>
      <hr/>
    <div class="col-md-9 col-md-offset-1">
<?php echo validation_errors(); ?>
<?php echo $this->session->flashdata('success_msg'); ?>
<?php echo form_open('usuario/mi_cuenta',array("class"=>"form-horizontal")); ?>
	<div class="form-group">
		<label for="nombre" class="col-md-4 control-label">Nombre</label>
		<div class="col-md-6">
			<input type="text" name="nombre" value="<?php echo ($this->input->post('nombre') ? $this->input->post('nombre') : $usuario['nombre']); ?>" class="form-control" id="nombre" />
		</div>
	</div>
	<div class="form-group">
		<label for="apellidos" class="col-md-4 control-label">Apellidos</label>
		<div class="col-md-6">
			<input type="text" name="apellidos" value="<?php echo ($this->input->post('apellidos') ? $this->input->post('apellidos') : $usuario['apellidos']); ?>" class="form-control" id="apellidos" />
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-4 control-label">Email</label>
		<div class="col-md-6">
			<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $usuario['email']); ?>" class="form-control" id="email" />
		</div>
	</div>
	<div class="form-group">
		<label for="depatarmento" class="col-md-4 control-label">Depatarmento</label>
		<div class="col-md-6">
			<select name="depatarmento" class="form-control">
				<option value="administracion">Administracion</option>
				<option value="informatica">Informatica</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Guardar Cambios</button>
        </div>
	</div>
	</div>
<?php echo form_close(); ?>

	<div class="col-md-12">
      <h3>Cambiar Contraseña</h3>
      <hr/>
    </div>

	<div class="col-md-9 col-md-offset-1">
<?php echo $this->session->flashdata('success_msg_password'); ?>	
<?php echo form_open('usuario/change_password/'.$usuario['id'],array("class"=>"form-horizontal")); ?>
	<div class="form-group">
		<label for="password" class="col-md-4 control-label">Password</label>
		<div class="col-md-6">
			<input type="password" name="password" value="" class="form-control" id="password" />
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-md-4 control-label">Confirmar Password</label>
		<div class="col-md-6">
			<input type="password" name="repassword" value="" class="form-control" id="repassword" />
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Cambiar Contraseña</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
</div>
</div>
</div>
</div><!--Menu-->
</div>
</body>
</html>