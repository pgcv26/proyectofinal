<?php


  //session_start();
  include_once "database.php";

  // inicios de sesion para no ingresar a la url 
  session_start();
     // se crea un objeto para llamar la clase (conexcion )  se llama la instacia con la variable conexion o como se quiera llamar

  $conexion = new conexion();
 // ese objeto conexion lo llamamos con el metodo (getconexion ) con la variable
   $con = $conexion->getconexion();

   // se llama las variables desde js por metodo post 
$usuario_user = $_POST['usuario'];
$contrasena_user = $_POST['contrasena'];
//echo $usuario. " ".$contrasena;
//nombras variables basias para entrar a validar en la base de datos y llamar los capos de la tabla usuarios 
$nombreusuario_tabla=''; $contrasena_tabla='';

// se realiza la consulta a la base de datos 
$query_login= $con->prepare("SELECT* FROM tblusuario where UsuNombreUsuario='$usuario_user'AND UsuContrasena='$contrasena_user'");
$query_login->execute();
$usuarios= $query_login->fetchALL(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario) {
 echo $nombreusuario_tabla=$usuario['UsuNombreUsuario'];
 echo $contrasena_tabla=$usuario['UsuContrasena'];
}
// se valida que los capos se encuentren en la base de datos si son correctos ingrse 
if( ($usuario_user==$nombreusuario_tabla) && ($contrasena_user==$contrasena_tabla)) {
  ?>
  <div class="alert alert-secundary" role="alert">
  Bienvenido !!
</div>
<script>location.href="../vista/paneladministrativo.php"</script>
  <?php
  // se crea una variable la cual identifica el usuario que esta iniciando sesion y vamos a la pagina donde quiere 
  //iniciar sesion 
  $_SESSION['usuario_sesion']= $nombreusuario_tabla;
  // si los campos no se encuentran en la base de datos arroja una alerta usuario y/o contraseña incorrectos 
}else {
  ?>
  <div class="alert alert-danger" role="alert">
   Usuario o/y contraseña incorrectos
  </div>
  <script>$('#contrasena').val('');$('#contrasena').focus();</script>
    <?php
}

?>