<?php

$usu=$_POST['email'];
$contra=$_POST['clave'];

session_start();
$_SESSION['email']=$usu;

$conectar = mysqli_connect("localhost", "root", "", "proyecto");

$consulta="SELECT*FROM superusu where email='$usu' and clave='$contra'";
$resultado=mysqli_query($conectar,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){//administrador
    header("location:usuario/home.php");
}else{
    ?>
        <?php

            $usu=$_POST['email'];
            $contra=$_POST['clave'];

            session_start();
            $_SESSION['email']=$usu;

            $conectar = mysqli_connect("localhost", "root", "", "proyecto");

            $consulta="SELECT*FROM usuarios where email='$usu' and clave='$contra'";
            $resultado=mysqli_query($conectar,$consulta);

            $filas=mysqli_num_rows($resultado);

            if($filas){
                header("location:registro.php");
            }else{
                ?>
                <?php
                include("ingreso.php");
                ?>
                <h1>ERROR EN AUTENTICACION</h1>
                <?php
            }

            mysqli_free_result($resultado);
            mysqli_close($conectar);

        ?>
    <?php
}


?>