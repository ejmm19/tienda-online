<?php 
include'conexion.php';
if ($_GET['id']) {
	$id=$_GET['id'];
	mysql_query("DELETE FROM equipo WHERE id_equipo = '$id'");
	//echo "hola",$id;
	header('Location: ../adminhome.php?op=4');
}
if ($_GET['pl']) {
	$id=$_GET['pl'];
	mysql_query("DELETE FROM plan WHERE id_plan = '$id'");
	//echo "hola",$id;
	header('Location: ../adminhome.php?op=3');
}


 ?>