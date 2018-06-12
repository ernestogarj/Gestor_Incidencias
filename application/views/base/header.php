<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/menu.css">
  <style type="text/css">
  	.table-add-btn{
  		margin-bottom: 5px;
  	}
  	</style>
<body>
	<!--Menu-->
	<div id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav text-left text-muted">
          <li class="sidebar-brand">Gestor Incidencias</li>
          <?php 
            echo' 
          <li>
            <a href='.site_url('incidencia').'>Mis Incidencias</a>
          </li>';?>
          <?php if ($permiso == 'Admin') {
            echo' 
          <li>
            <a href='.site_url('incidencia/sin_asignar').'>Incidencias Sin Asignar</a>
          </li>';}?>

          <?php if ($permiso == 'Tecnico') {
            echo' 
          <li>
            <a href='.site_url('incidencia/tecnico_incidencias_asignadas').'>Tecnico Incidencias Asignadas</a>
          </li>';}?>

          <?php if ($permiso == 'Admin') {
            echo' 
          <li>
            <a href='.site_url('incidencia/incidencias_asignadas').'>Incidencias Asignadas</a>
          </li>';}?>

          <?php if ($permiso == 'Admin') {
            echo' 
          <li>
            <a href='.site_url('usuario').'>Usuarios</a>
          </li>';}?>
          <li>
            <a href="<?php echo site_url('usuario/mi_cuenta'); ?>">Mi Cuenta</a>
          </li>
          <li>
            <a href="<?php echo site_url('logout'); ?>">Salir</a>
          </li>
        </ul>
      </div>
      <!--Fin Menu-->

