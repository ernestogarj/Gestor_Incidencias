<div id="page-content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <h3>Incidencias Asignadas</h3>
      <hr/>
      <div class="col-md-12">

<!--Listado incidencias-->
<?php foreach($incidencias as $i): ?>
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="row">
            <div class="col-md-2">
              <p><b>Usuario:</b> <?php echo $i['nombre'].'&nbsp'.$i['apellidos']?></p>
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
          <a href="<?php echo site_url('incidencia/incidencia_resuelta/'.$i['id']); ?>" class="btn btn-success btn-block">Incidencia Resuelta</a><br/> 
        </div>
    </div>
    </div>
	<?php endforeach; ?>
<!--Fin listado incidencias-->

</div>
</div>
</div>
</div>
</div>

</body>
</html>