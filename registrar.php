<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <!--<link rel="stylesheet" href="css/boostrap.min.css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome/css/all.css">    
</head>
<body>
<form action="registrar.php" method="post">
    <div class="container">
        <div class="row alert-success">
            <div class="col-12 pl-0 pr-0">
                <div class="bg-info w-100 pt-2 pb-2">
                <h4 class="alert-heading text-center mt-1 text-dark font-weight-bold">REGISTRAR USUARIO</h4>
                </div>            
                <hr>
            </div>        
            <div class="col-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Usuario</label>
                    <input name="usuario" class="form-control form-control-sm border border-primary bg-light" type="text">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre</label>
                    <input name="nombreUser" class="form-control form-control-sm border border-primary bg-light" type="text">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Apellido</label>
                    <input name="apellidoUser" class="form-control form-control-sm border border-primary bg-light" type="text">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Numero Identificación</label>
                    <input name="identificacionUser" class="form-control form-control-sm border border-primary bg-light" type="text">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input name="emailUser" class="form-control form-control-sm border border-primary bg-light" type="email">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Conformar Email</label>
                    <input name="emailUserCofi" class="form-control form-control-sm border border-primary bg-light" type="email">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Clave</label>
                    <input name="claveUser" class="form-control form-control-sm border border-primary bg-light" type="password">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Confirmar Clave</label>
                    <input name="claveUserConfi" class="form-control form-control-sm border border-primary bg-light" type="password">
                </div>
            </div>       
            <div class="col-12 p-3 d-flex justify-content-center">  
                <div class="col-4 ">
                    <button type="submit" class="btn btn-danger w-100 font-weight-bold">REGISTRAR</button>
                </div> 
            </div>
        
        
        </div>     
    </div>
    </form>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="js/sweetalert.min.js"></script>
</body>
</html>

<?php 
include("BD/conexion.php");


if($_POST)
{ 
    $usuario=$_POST['usuario'];
    $nombreUser=$_POST['nombreUser'];
    $apellidoUser=$_POST['apellidoUser'];
    $identificacionUser=$_POST['identificacionUser'];
    $emailUser=$_POST['emailUser'];
    $emailUserCofi=$_POST['emailUserCofi'];
    $claveUser=$_POST['claveUser'];
    $claveUserConfi=$_POST['claveUserConfi'];
  
    if($usuario != "" && $nombreUser != "" && $apellidoUser != "" && $identificacionUser != "" && $emailUser != "" && $emailUserCofi != "" && $claveUser != ""&& $claveUserConfi != "")
    {
        if($emailUser == $emailUserCofi ){
            if($claveUser == $claveUserConfi ){
                $data = [
                    'a' => $usuario,
                    'b' => $nombreUser,
                    'c' => $apellidoUser,
                    'd' => $identificacionUser,
                    'e' => $emailUser,
                    'f' => $claveUser,        
                ];
        
                $conn=conectar2();
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $conn->exec("SET CHARACTER SET utf8");
                $sql="INSERT INTO usuarios (nombre,apellido,email,cedula,clave,usuario) VALUES(:b,:c,:e,:d,:f,:a);";       
                $result = $conn->prepare($sql);
                $result->execute($data);  
        
                if($result)
                {
                    $var = "Usuario insertado correctamente";           
                    echo "<script language='javascript'>swal({ title: 'Felicidades !',text: 'Usuario insertado correctamente.!', icon: 'success', buttons: true, dangerMode: true, }) .then((willDelete) => { location.href ='./login.php'; });</script>";	
                }
                else 
                {
                    $var = "Se presento un error al isertar Usuario";          
                    echo "<script language='javascript'>swal('Error!', '{$var}', 'error');</script>";		
                   
                }      
            }  
            else{
                $var = "Se presento un error al isertar Usuario";          
                echo "<script language='javascript'>swal('Error!', '{$var}', 'error');</script>";		
               
            }

            }
            else
            {
                $var = "Las contraseñas no son iguales, por favor verifique e intente nuevamente";
                echo "<script language='javascript'>swal('Error!', '{$var}', 'error');</script>";		
               
            }
        }
        else
        {
            $var = "Por favor diligencie los campos vacios.";          
            echo "<script language='javascript'>swal('Error!', '{$var}', 'error');</script>";		
           
        }
}
?>
