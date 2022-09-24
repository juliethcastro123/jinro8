<?php 
 include("conexion.php");

    function validarcredenciales($user,$clave){    
        $conn=conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT *  FROM usuarios WHERE upper(usuario)= upper('$user') and clave = $clave ";    
        $result = mysqli_query( $conn, $sql); 
       
        $conn->close();   

        return $result;
    };

    function recupererUsuario($user){
        $conn=conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }     
        $sql = "SELECT * FROM usuarios WHERE upper(usuario)= upper($user)";    
        $result = $conn->query($sql);
        $conn->close();

        return $result;
    };    
    
        
?> 