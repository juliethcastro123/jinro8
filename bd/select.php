<?php 
    
    function leerCervezas2(){        
        $conn=conectar2();
        $parametro = 3;

        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $conn->exec("SET CHARACTER SET utf8");
        $sql="SELECT * FROM product where id_tipo_producto = ?";
        $result = $conn->prepare($sql);
        $result->execute(array($parametro));

        return $result;
    };


    function leerLicores(){
        $conn=conectar2();
        $parametro = 4;

        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $conn->exec("SET CHARACTER SET utf8");
        $sql="SELECT * FROM product where id_tipo_producto = ?";
        $result = $conn->prepare($sql);
        $result->execute(array($parametro));

        return $result;

    };
    
    function leerSinAlchol(){
        $conn=conectar2();
        $parametro = 5;

        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $conn->exec("SET CHARACTER SET utf8");
        $sql="SELECT * FROM product where id_tipo_producto = ?";
        $result = $conn->prepare($sql);
        $result->execute(array($parametro));

        return $result;
    };

    function leerSnacks(){
        $conn=conectar2();
        $parametro = 6;

        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $conn->exec("SET CHARACTER SET utf8");
        $sql="SELECT * FROM product where id_tipo_producto = ?";
        $result = $conn->prepare($sql);
        $result->execute(array($parametro));

        return $result;
    };

    function leerPromociones(){
        $conn=conectar2();
        $parametro = 7;

        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $conn->exec("SET CHARACTER SET utf8");
        $sql="SELECT * FROM product where id_tipo_producto = ?";
        $result = $conn->prepare($sql);
        $result->execute(array($parametro));

        return $result;
    };

    function leerCategorias(){
        $conn=conectar2();        

        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $conn->exec("SET CHARACTER SET utf8");
        $sql="select id, nombre from detalle_master where id_categoria is null";
        $result = $conn->prepare($sql);
        $result->execute(array());

        return $result;
    };

    function leerTipoProducto(){
        $conn=conectar2();
        $parametro = 1;

        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $conn->exec("SET CHARACTER SET utf8");
        $sql="select id,nombre from detalle_master where id_categoria = ?";
        $result = $conn->prepare($sql);
        $result->execute(array($parametro));

        return $result;
    };

    function leerTipoPresentacion(){
        $conn=conectar2();
        $parametro = 2;

        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $conn->exec("SET CHARACTER SET utf8");
        $sql="select id,nombre from detalle_master where id_categoria = ?";
        $result = $conn->prepare($sql);
        $result->execute(array($parametro));

        return $result;
    };

    function leerProductos(){

        $conn=conectar2();
        
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $conn->exec("SET CHARACTER SET utf8");
        $sql="select p.*,pro.nombre as 'TIPO_PRODUCTO',pre.nombre as 'TIPO_PRESENTACION' from product p inner join detalle_master pro on p.id_tipo_producto = pro.id inner join detalle_master pre on p.id_presentacion = pre.id ORDER BY p.id ASC";
        $result = $conn->prepare($sql);
        $result->execute(array());

        return $result;

    };
        
?> 