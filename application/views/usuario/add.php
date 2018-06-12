<?php echo validation_errors(); ?>
<?php echo form_open('usuario/add',array("class"=>"form-horizontal")); ?>
<div id="page-content-wrapper">
  <div class="container-fluid">
    <div class="row">
    <h3>Añadir un Nuevo Usuario</h3>
    <hr/>
		<div class="col-md-8 col-md-offset-1">
			<div class="form-group">
				<label for="nombre" class="col-md-4 control-label">Nombre</label>
				<div class="col-md-8">
					<input type="text" name="nombre" value="<?php echo $this->input->post('nombre'); ?>" class="form-control" id="nombre" />
				</div>
			</div>
			<div class="form-group">
				<label for="apellidos" class="col-md-4 control-label">Apellidos</label>
				<div class="col-md-8">
					<input type="text" name="apellidos" value="<?php echo $this->input->post('apellidos'); ?>" class="form-control" id="apellidos" />
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="col-md-4 control-label">Email</label>
				<div class="col-md-8">
					<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-md-4 control-label">Password</label>
				<div class="col-md-8">
					<input type="password" name="password" value="" class="form-control" id="password" />
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-md-4 control-label">Confirmar Password</label>
				<div class="col-md-8">
					<input type="password" name="repassword" value="" class="form-control" id="repassword" />
				</div>
			</div>
			<div class="form-group">
				<label for="depatarmento" class="col-md-4 control-label">Depatarmento</label>
				<div class="col-md-8">
					<select name="depatarmento" class="form-control">
						<option value="">--Seleccione un Departamento--</option>
						<option value="administracion">Administracion</option>
						<option value="informatica">Informatica</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="rol" class="col-md-4 control-label">Rol</label>
				<div class="col-md-8">
					<select name="rol" class="form-control">
						<option value="">--Seleccione Un Rol--</option>
						<option value="Admin">Admin</option>
						<option value="Tecnico">Tecnico</option>
						<option value="usuario">Usuario</option>
					</select>
				</div>
			</div>
	
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-success">Añadir</button>
        		</div>
			</div>
		</div>
	</div>
  </div>
 </div>
</div><!--Wrapper en base-->
<?php echo form_close(); ?>
</body>
