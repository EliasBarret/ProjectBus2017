<?php 
	
	//$conectar = mysqli_connect("localhost", "root", "") or die ("erro na conexão");

	//	$mysqli_select_db("in9bus_bd");



	$conecta = mysqli_connect("localhost", "root", "", "in9bus_bd");

	if (!$conecta) {
		echo mysqli_connect_error();
	}

	//mysqli_close(!$conecta)
?>