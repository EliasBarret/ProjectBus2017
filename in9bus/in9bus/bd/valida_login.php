<?php 

	include "conexxao.php";
	
	session_start();

	$var_user = $_POST['user'];
	$var_senha = $_POST['pass'];

	$sql = "SELECT * FROM tb_login WHERE nome = '".$var_user."' AND senha = '".$var_senha."' ";
	
	
	//$rowcount=mysqli_num_rows($sql);
	

	if(mysqli_query($conecta,$sql)>0){

		$_SESSION['user'] = $var_user;
		$_SESSION['senha'] = $var_senha;
		header('location:../home.php');
		//printf("Result set has %d rows.\n",$rowcount);
	
	}else{
		unset ($_SESSION['user']);
		unset ($_SESSION['senha']);
		//echo "$rowcount";
	   // header('location:../index.php');
		}
?>
