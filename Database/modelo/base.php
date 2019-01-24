<?php
class DataBase {
    public function insertarUsuario($name,$cedula,$email,$password,$telefono){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "insert into users(name, cedula, email, password, telefono) 
        values (:name, :cedula, :email, :password,:telefono)";
        $statement = $conexion->prepare($sql);
        $statement -> bindParam(':name',$name);
        $statement -> bindParam(':cedula',$cedula);
        $statement -> bindParam(':email',$email);
        $statement -> bindParam(':password',$password);
        $statement -> bindParam(':telefono',$telefono);
        if(!$statement){
            return "Error  no se puede realizar la carga";
        }
        else{
            $statement->execute();
            return "la insercion se realizo con exito";
        }
    }
}