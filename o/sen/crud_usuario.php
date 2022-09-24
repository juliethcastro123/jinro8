<?php
require_once("conexion.php");
require_once("usuario.php");

class crudUsuario{
    public function _construct(){}

    //insertar los datos del usuario

    public function insertar($usuario){
        $db=db::conectar();
        $insert=$db->prepare('INSERT INTO USUARIO VALUES(NUll,:nombre, :clave)');
        $insert->bindValue('nombre',$usuario-getNombre());
        //encriptar la clave
        $pass=password_hash($usuario-getClave(),PASSWORD_DEFAULT);
        $insert->bindValue('clave',$pass);
        $insert->execute();
    }

    //obtiene el usuario para el login 
    public function obtenerUsuario($nombre,$clave){
        $db=Db::conectar();
        $select=$db->prepare('SELECT + FROM USUARIOS WHERE nombre=:nombre');
        $select->bindValue('nombre',$nombre);
        $select->execute();
        $registro=$select->fetch();
        $usuario= new Usuaro();
        //verificar si la clave es ccorrecta
        if (password_verify($clave, $registro['clave'])){

            $usuario->setId($registro['Id']);
            $usuario->setNombre($registro['nombre']);
            $usuario->setClave($registro['clave']);

        }
        return $usuario
    
    }
//busca el nombre del usuario si existe
public function buscarUsuario($nombre){
    $select=$db->prepare('SELECT * FROM USUARIOS WHERE nombre=:nombre');
    $select->bindValue('nombre')
    $select->execute();
    $registro=$select->fetch();
    if($registro['Id']!=NULL){
        $usado=true;
    }
    return $usado;
}

}

