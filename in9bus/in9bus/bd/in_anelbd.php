<?php

	include"conexxao.php";

	$var_anel=trim($_POST['tf_anel']);
	$var_valor=trim($_POST['tf_valor']);


	$sql = "INSERT INTO tb_anel values ( default ,'".$var_anel."','".$var_valor."', NOW())";

		if (mysqli_query($conecta,$sql)) {
			echo "0";
			header("location:../in_anel_tarifa.php");
		}else {
			echo "1";
			
		}
?>
