<?php 
require_once('../modelo/conexion.php');
require_once('../modelo/base.php');
$mensaje = null;
$name = $_POST['name'];
$cedula = $_POST['cedula'];
$email = $_POST['email'];
$password = $_POST['password'];
$telefono = $_POST['telefono'];
if(strlen($name)>0 && strlen($cedula)>0 && strlen($email)>0 && strlen($password)>0 && strlen($telefono)>0)
{
    $consulta = new DataBase();
    $mensaje  = $consulta->insertarUsuario($name,$cedula,$email,$password,$telefono);
}else{
    echo "Porfavor ingrese los datos";
}
echo $mensaje;
?>