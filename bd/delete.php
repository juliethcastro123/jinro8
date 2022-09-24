<?php include("conexion.php");?>
<?php 
        header("Location: ../gestionProductos.php");   
        $conn=conectar2();
        $parametro = $_GET['id'];
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $conn->exec("SET CHARACTER SET utf8");
        $sql="DELETE FROM product WHERE id = ?";
        $result = $conn->prepare($sql);
        $result->execute(array($parametro));

        return $result;
?>