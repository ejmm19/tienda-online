<?php 
	/**
	* 
	*/
	include"./php/conexion.php";
	
	
	
	
	
	class Classmostrar
	{
		

		public function consultaSimple($tabla){
			$cons=mysql_query("SELECT * FROM $tabla");
			$row=mysql_fetch_object($cons);
	}


 ?>