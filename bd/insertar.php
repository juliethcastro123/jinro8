<?php
    if($_POST){
        include_once "conexion.php";

       

        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $id_tipo_producto=intval($_POST['tipoproductos']);
        $id_tipo_presentacion=intval($_POST['tipopresentacion']);
        $cantidad=intval($_POST['cantidad']);
        $url=$_POST['urlImg'];
        $costo=intval($_POST['costo']);

        $data = [
            'a' => $nombre,
            'b' => $descripcion,
            'c' => $id_tipo_presentacion,
            'd' => $id_tipo_producto,
            'e' => $cantidad,
            'f' => $url,
            'g' => $costo,
        ];

        $conn=conectar2();
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $conn->exec("SET CHARACTER SET utf8");
        $sql="INSERT INTO product (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES (:a,:b,:c,:d,:e,:f,:g)";
        $result = $conn->prepare($sql);
        $result->execute($data);  

        if($result){
            $var = "Producto insertado correctamente";
            echo "<script> alert('".$var."'); </script>";
            Header("Location: ../gestionProductos.php");   
        }else {
        }      

        return $result;
        
    }
?>