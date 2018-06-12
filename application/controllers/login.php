<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('usuario_model','',TRUE);
 }
 
//Index con formulario de login
 function index()
 {
  //Redireccion por si ya se ha inciado sesion 
  if ($this->session->userdata('logged_in')) {
      redirect('incidencia', 'refresh');
  }

  //This method will have the credentials validation
   $this->load->library('form_validation');
 
   $this->form_validation->set_rules('email', 'email', 'required');
   $this->form_validation->set_rules('password', 'Password', 'required|callback_check_database');
 
   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->helper(array('form'));
     $this->load->view('/login/login_view');
   }
   else
   {
     //Go to private area
     redirect('incidencia', 'refresh');
   }
   
 }


 //Funcion que comprueba los datos en la base de datos y abre sesion si son correctos
 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $email = $this->input->post('email');
 
   //query the database
   $result = $this->usuario_model->login($email, $password);
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'email' => $row->email,
         'rol' => $row->rol

       );
      
       $this->session->set_userdata('logged_in', $sess_array);
       
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Usuario o Contraseña Incorrectos');
     return false;
   }
 }

}
 
?>