<!DOCTYPE html>
  <head>
    <title>Bienvenido Al Gestor de Incidencias-Login</title>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/index.css">
     <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  </head>
  <body>
    <div class="container">
      <div class="row vertical-offset-100">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
        <div class="panel-heading">                                
          <div class="row-fluid user-row">
            <img src="http://s11.postimg.org/7kzgji28v/logo_sm_2_mr_1.png" class="img-responsive" alt="Conxole Admin"/>
          </div>
        </div>
        <div class="panel-body">
          <?php echo validation_errors('<div class="alert alert-danger text-center">','</div>'); ?>
          <?php echo form_open('login'); ?>
          <fieldset>
          <label class="panel-login">
            <div class="login_result"></div>
          </label>
          <input class="form-control" placeholder="Introduzca el Email" id="email" name="email" type="text" required="required">
          <input class="form-control" placeholder="Introduzca la contraseña" id="password" name="password" type="password" required="required">
          <br/><br/>
          <input class="btn btn-lg btn-success btn-block" type="submit" id="login" value="Acceder »">
          </fieldset>
          </form>
          </div>
          </div>
        </div>
    </div>
</div>
</body>
</html>       


            