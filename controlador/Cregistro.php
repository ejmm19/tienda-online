<?php 
include'./modelo/consultas.php';
$role='user';
$obje=new Consultasbd;
$obje->registroBaseDatos($_POST['nombre'],$_POST['apellidos'],$_POST['edad'],$_POST['correo'],
	$_POST['documento'],$_POST['password'],$role,$_POST['usuario']);
echo "<script>alert('Usuario Registrado con Exito!!!')</script>";
?>