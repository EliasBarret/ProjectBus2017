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
          <a class="navbar-brand" href="home.php">IN9BUS</a>
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
                <li ><a href="in_anel_tarifa.php">ANEL RODOVIÁRIO</a></li>
                <li><a href="#">ROTA</a></li>
              </ul>
            </li>

            <li><a href="#">MANUTENÇÃO DE ROTAS</a></li>
            <li class="active"><a href="in_tarifa.php">ATUALIZAÇÃO TARIFARIA</a></li>
            <li><a href="in_oficina.php">OFICINA BUS</a></li>
            <li><a href="#">AJUDA</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container theme-showcase" role="main">
      <div class="jumbotron">
		<div class = "form-group row">
			
			<form action="bd/in_tarifabd.php" method="POST">
				
				<fieldset>
					<legend><h1><center/> TARIFA RODOVIÁRIA </h1></legend>
		
            <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">ANEL</label>
                <div class="col-xs-10">
                  
                  <select name="cb_anel" id="cb_anel" class="selectpicker" data-width="100%">
                    <option>Selecione uma Opção</option>
                      <?php
                        $result_anel = "SELECT * FROM tb_anel";
                        $result_anel = mysqli_query($conecta,$result_anel);
                        while($row_anel = mysqli_fetch_assoc($result_anel)){ ?>
                         <option value="<?php echo $row_anel['id']; ?> "><?php echo $row_anel['anel_tipo'];?></option><?php } ?> 
                      ?>
                  </select>
                  
                </div>
            </div>

             
             <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">TARIFA</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="valor_tarifa" id="valor_tarifa" placeholder="R$ 0.00">
              </div>
            </div>

				</fieldset>
					<p>
						<button type="submit" class="btn btn-primary" value="Enviar">Atualizar</button>
					</p>
			</form>

      <?php
         $result_anel = "SELECT * FROM tb_anel";
         $result_anel = mysqli_query($conecta,$result_anel);

         echo "<br/><table class='table table-striped table-bordered table-hover'>

                <tr>
                  <td><center/>CÓDIGO</td>
                  <td><center/>ANEL</td>
                  <td><center/>TARIFA ATUAL</td>
                  <td><center/>DATA DE CRIAÇÃO</td>
                </tr>";

          while($line = mysqli_fetch_array($result_anel, MYSQLI_BOTH)){

          
         // echo $data = $line["data_create_anel"];
         // date_format($data, 'Y-m-d H:i:s');

          echo "<tr>
                  <td><center>".$line["id"]."</td>
                  <td><center>".$line["anel_tipo"]."</td>
                  <td><center>"."R$ ".$line["tarifa"]."</td>
                  <td><center>".$line["data_create_anel"]."</td>
                </tr>";
          }             
      ?>

      <!--.$line["data_create_anel"].-->

	</div>

    <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
    <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>


</body>
</html>