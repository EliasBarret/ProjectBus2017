<?php

	include"conexxao.php";

	$var_anel=trim($_POST['cb_anel']);
	$var_tarifa=trim($_POST['valor_tarifa']);

	$sql = "UPDATE tb_anel SET tarifa = '".$var_tarifa."' WHERE id = '".$var_anel."' ";

		if (mysqli_query($conecta,$sql)) {
			echo "0";
			header("location:../in_tarifa.php");
		}else {
			echo "1";			
		}
?>
