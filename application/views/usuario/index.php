  <div id="page-content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <h3>Usuarios Del Sistema</h3>
      <hr/>
      <?php echo $this->session->flashdata('success_msg_add'); ?>
      <?php echo $this->session->flashdata('success_msg_edit'); ?>
     <?php echo $this->session->flashdata('success_msg_delete'); ?>
      <div class="col-md-12">
        <div class="pull-right">
	       <a href="<?php echo site_url('usuario/add'); ?>" class="btn btn-success table-add-btn">Nuevo Usuario</a> 
        </div>

<!--Tabla usuarios-->
        <table table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" aria-describedby="example_info" role="grid">
          <tr>
		        <td>ID</td>
		        <td>Nombre</td>
		        <td>Apellidos</td>
		        <td>Email</td>
		        <td>Depatarmento</td>
		        <td>Permisos</td>
		        <td>Acciones</td>
          </tr>
	 <?php foreach($usuarios as $u): ?>
          <tr>
		        <td><?php echo $u['id']; ?></td>
		        <td><?php echo $u['nombre']; ?></td>
		        <td><?php echo $u['apellidos']; ?></td>
		        <td><?php echo $u['email']; ?></td>
		        <td><?php echo $u['departamento']; ?></td>
		        <td><?php echo $u['rol']; ?></td>
            <td>
            <a href="<?php echo site_url('usuario/edit/'.$u['id']); ?>" class="btn btn-info">Editar</a> 
            <button type="button" class="btn btn-danger btneliminar" data="<?php echo site_url('usuario/remove/'.$u['id']); ?>" data-toggle="modal" data-target="#eliminarmodal">Eliminar</button>
            </td>
          </tr>
	 <?php endforeach; ?>
        </table>
<!--Fin tabla usuarios-->

<!--Modal eliminar-->
    <div class="modal fade" id="eliminarmodal" role="dialog">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Eliminar Usuario</h4>
          </div>
          <div class="modal-body">
            <p>¿Está seguro que desea de eliminar a este usuario del sistema?</p>
            <a href="" class="btn btn-success dellink">Eliminar</a>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          </div>
        <div class="modal-footer">
        </div>
        </div>
      </div>
    </div> 
      </div>   
      </div>
      </div>
      </div><!--Menu-->
      </div>

<!--Fin modal eliminar-->
<script>
$('.btneliminar').click(function() { 
    var id = $(this).attr('data');
   $('.dellink').prop("href", id);
});
</script>
</body>
</html>
