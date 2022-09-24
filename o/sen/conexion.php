<?php
class db{
    private static $conexion=null;
    private function _construct(){}

    public static function conectar(){
        $pdo_options[PDO::ATT_ERRMODE]=ERRMODE_EXCEPTION;
        self:: $conexion=new PDO("mysql:localhost;dbname=baselogin","root","",$pdo_options);
    return self::$conexion;
    }
}
?>