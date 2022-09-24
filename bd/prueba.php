<?php
  if($_POST)
  {
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
      

    include_once "conexion.php";

    $conn=conectar2();
    
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET CHARACTER SET utf8");
    $sql="SELECT * FROM usuarios WHERE upper(usuario)= upper('$usuario') and clave = '$contraseña'";
    $result = $conn->prepare($sql);
    $result->execute(array());

    $count=$result->rowCount();
    $data=$result->fetch(PDO::FETCH_OBJ);
    $conn = null;

    if($count){
      echo("<script language='javascript'>location.href ='../index.php'; </script>");
    }
    else
    {  
      session_start(); 
      $_SESSION['msj']="Usuario y/o contraseña invalida";
      header('Location: ../login.php');        
    }   
    
    $result=null;       
  }
?>