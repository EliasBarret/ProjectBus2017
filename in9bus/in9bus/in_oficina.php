<?php

 include "bd/conexxao.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<link href="css/theme.css" rel="stylesheet">
 
	<title>In9bus</title>

</head>
<body>

  <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar">dd</span>
            <span class="icon-bar">dd</span>
            <span class="icon-bar">dd</span>
          </button>
          <a class="navbar-brand" href="home.php">In9bus</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="home.php">INÍCIO</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CADASTRO<span class="caret"></span></a>
              <ul class="dropdown-menu">
               <li><a href="#">USUÁRIO</a></li>
                <li><a href="cadastros/cd_empresa.php">EMPRESA</a></li>
                <li><a href="cadastros/cd_onibus.php">ONIBUS</a></li>
                <li><a href="#">ROTA</a></li>
              </ul>
            </li>

            <li><a href="#">MANUTENÇÃO DE ROTAS</a></li>
            <li ><a href="in_tarifa.php">ATUALIZAÇÃO TARIFARIA</a></li>
            <li class="active"><a href="in_oficina.php">OFICINA BUS</a></li>
            <li><a href="#">AJUDA</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container theme-showcase" role="main">
      <div class="jumbotron">
		<div class = "form-group row">
			
			<form action="bd/in_officinabd.php" method="POST">
				
				<fieldset>
					<legend><h1><center/>OFICINA</h1></legend>

            <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">ÔNIBUS PARA MANUTENÇÃO</label>
                <div class="col-xs-10">
                  <select class="selectpicker" data-width="100%">
                    <option>SELECIONE O ÔNIBUS</option>
                      <?php
                        $result_bus = "SELECT * FROM tb_onibus";
                        $result_bus = mysqli_query($conecta,$result_bus);
                        while($row_bus = mysqli_fetch_assoc($result_bus)){ ?>
                          <option value="<?php echo $row_bus['id']; ?> "><?php echo $row_bus['oni_modelo'];?></option><?php } ?> 
                      ?>
                  </select>
                </div>  
            </div>
             
             <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">Tarifa</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="valor_anel" id="valor_anel" placeholder="R$ 0,00">
              </div>
            </div>

				</fieldset>
					<span>
          <p>
            <br/>
						<button type="submit" class="btn btn-primary" value="Enviar" >Atualizar</button>
           <!-- <button type="submit" class="btn btn-primary" value="Enviar">Atualizar</button>
            <button type="submit" class="btn btn-primary" value="Enviar">Atualizar</button>
            <button type="submit" class="btn btn-primary" value="Enviar">Atualizar</button> -->
          </span>
			</form>

      <?php
         $result_bus = "SELECT * FROM tb_oficina";
         $result_bus = mysqli_query($conecta,$result_bus);

         echo "<table class='table table-striped'>

                <tr>
                  <td><center/>CÓDIGO_BUS</td>
                  <td><center/>MODELO_BUS</td>
                  <td><center/>STATUS_BUS</td>
                  <td><center/>DATA_ENTRADA</td>
                  <td><center/>MECÂNICO_RESPONSÁVEL</td>
                </tr>";

          while($line = mysqli_fetch_array($result_bus, MYSQLI_BOTH)){

          echo "<tr>
                  <td><center>".$line["id"]."</td>
                  <td><center>".$line["modelo_bus"]."</td>
                  <td><center>".$line["status"]."</td>
                  <td><center>".$line["entrada"]."</td>
                  <td><center>".$line["mec_resp"]."</td>
                </tr>";
          }             
      ?>

	</div>

    <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
    <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>


</body>
</html>

