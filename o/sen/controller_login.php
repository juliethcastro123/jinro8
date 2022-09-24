<?php
require_once('usuario.php');
require_once('crud_usuario.php');
require_once('conexion.php');

//inicio de sesion
session_start();
$usuario=new Usuario();
$crud=new CrudUsuario();
//verifica si la variaable registrada esta definida
// se da que esta deinida cuando el usuario se logra, ya que se logea,ya que lo envia la peticion
if (isset($_POST['registrarse'])) {
$usuario->setNombre($_POST['usuario']);
$usuario->setClave($_POST['pass']);
if ($crud->buscarUsuario($_POST['usuario'])); {
    $crud->insertar($usuario);
    header('location: index.php');
    }else{
        header('location: error .php?mensaje=el nombre de usuario ya existe'):
    }
}elseif(isset($_POST['entrar'])){
    $usuario=$crud->obtenerUsuario($_POST['usuario'],$_POST['pass']);
    //si el id fel del objeto no returna es NULL, quiere decir que no encontro un registro
    if ($usuario->getId()!=NULL){
        $_SESSION['usuario']=$usuario //si el usuario se envuentra crea la session de usuario
        header('location cuenta.php');
    }else{
    header('location error.php?mensaje=tu nombre de usuario o contraseña son incorrecatas');
    //cuando los datos son incorrecto anda el mensaje de error
    }
}elseif
        (isset($_POST['salir'])){

            header('location index.php')
            unset($_SESSION['usuario']);
}
?>

