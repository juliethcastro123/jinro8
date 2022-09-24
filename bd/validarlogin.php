<?php 
 include("funcioneslogin.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {  
    $username = $_POST['usuario'];
    $password = $_POST['contrasena'];
    session_start(); 
    $_SESSION['usuario']=$username;

    include("BD/conexion.php");
    $sql = "SELECT *  FROM usuarios WHERE upper(usuario)= upper('$user') and clave = $clave"; 
    $result = mysqli_query($conn,$sql);     
    $fila=mysqli_num_rows( $result);
    
    if ($fila)
    {
        header("location:index.php");
    }
    else{
        ?>
        <?php
        include("login.php");
        ?>
        <h1>ERROR DE AUTENTICACION</h1> 
        <?php
    }

    $conn->close(); 



   

    


  /*
    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }
 
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO users(USERNAME,PASSWORD,EMAIL) VALUES (:username,:password_hash,:email)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            echo '<p class="success">Your registration was successful!</p>';
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }*/
}


?>
