<?php
//configureacion para acceder a la db
function conn(){
    $hostname = "bq2swpkc1h4wa1nq3s1r-mysql.services.clever-cloud.com";
    $usuariodb = "utlg8v5jfstaxpph";
    $password = "hQSvQbgwoAYZbfcX1Zg4";
    $dbname = "bq2swpkc1h4wa1nq3s1r";
    //generando la conexion con el servidor
    $conectar = mysqli_connect($hostname, $usuariodb, $password, $dbname);
    return $conectar;
}
?>
