<?php
include_once('db.php');
//recivo todos los datos del formulario
if($_POST){


        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $email=$_POST['email'];
        $cedula=$_POST['cedula'];
        $clave=$_POST['clave'];
        $conclav=$_POST['conclav'];

        $conectar=conn();
        $sql="INSERT INTO usuarios (nombre, apellido, email, cedula, clave, conclav)
        VALUES ('$nombre', '$apellido', '$email', '$cedula', '$clave', '$conclav')";
        $resul = mysqli_query($conectar , $sql)or trigger_error("query failed! SQL- Error: ".mysqli_error($conectar), E_USER_ERROR);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenido</title>
    <link rel="stylesheet" href="css/miscss.css"> 
    <link rel="stylesheet" href="css/boostrap.min.css"> 
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container p-0">
        <?php include("index2/nav.php");?>
        <?php include("index2/menu.php");?>
        <br>
        <hr>


        <form class="formu">

        <center>

        <div class="ussu">
            <img src="img/usu.png" id="usssu" width="100" height="100">
        </div>

        </center>

        <div class="conte">
            <center>
                <font color="white" size="11" >
                    Datos
                </font>
            </center>
                <br>
                <font color="white" size="6">
                    Nombre
                </font><br>
                    <?php
                    echo "$nombre";
                    ?><br>
                <font color="white" size="6">
                    Apellido
                </font><br>
                    <?php
                    echo "$apellido";
                    ?><br>
                <font color="white" size="6" >
                    Email
                </font><br>
                    <?php
                    echo "$email";
                    ?><br>
                <font color="white" size="6">
                    Cedula
                </font><br>
                    <?php
                    echo "$cedula";
                    ?>

 
                <br><br><br>
                
                <a type="submit" value="Editar" class="button" href="#"><center>Editar </center></a></p> 
                <a type="submit" value="Editar" class="button" href="#"><center>Cambiar contraseña </center></a></p> 
                <a type="submit" value="Editar" class="button" href="#"><center>Cerrar sesion </center></a></p> 
                 
</div></form>


        <hr>
        <br>

        <?php include("index2/futer.php");?>

    </div>   


    <script src="js/jquery.min.js"></script>
    <script src="js/boostrap.min.js"></script>
    <script src="js/misjs.js"></script>
</body>
</html>

   


