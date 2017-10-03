<?php
include "../bd/conexxao.php";
session_start();

if((!isset ($_SESSION['user']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['user']);
  unset($_SESSION['senha']);
  header('location:index.php');
  }

 $logado = $_SESSION['user'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <link href="../css/theme.css" rel="stylesheet">
  

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
            <li><a href="../home.php">INÍCIO</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CADASTRO<span class="caret"></span></a>
              <ul class="dropdown-menu">
               <li><a href="cd_users.php">USUÁRIO</a></li>
                <li><a href="cd_empresa.php">EMPRESA</a></li>
                <li class="active"><a href="cd_onibus.php">ONIBUS</a></li>
                <li><a href="../in_anel_tarifa.php">ANEL VIÁRIOO</a></li>
                <li><a href="#">ROTA</a></li>
              </ul>
            </li>

            <li><a href="#">MANUTENÇÃO DE ROTAS</a></li>
            <li><a href="../in_tarifa.php">ATUALIZAÇÃO TARIFARIA</a></li>
            <li><a href="../in_oficina.php">OFICINA BUS</a></li>
            <li><a href="#">AJUDA</a></li>

            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style='text-transform:uppercase'><?php echo "$logado" ?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../php/encerrar_session.php?act=logout">SAIR</a></li>
              </ul>
            </li>
            </ul>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container theme-showcase" role="main">
      <div class="jumbotron">
    <div class = "form-group row">
      
      <form action="../bd/in_onibusbd.php" method="POST">
        
        <fieldset>
          <legend><h1><center/>CADASTRO ÔNIBUS</h1></legend>

           <!--  <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">ID</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_id" id="tf_id" disabled="true">
              </div>
            </div> -->            
             
             <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">MODELO</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_modelo" id="tf_modelo">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">ANO DE FABRICAÇÃO</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_anofab" id="tf_anofab" placeholder="2020">
              </div>
            </div>

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
              <label for="example-text-input" class="col-xs-2 col-form-label">LINHA VIÁRIA</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_linha" id="tf_linha">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">ANO COMPRA</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_anocompra" id="tf_anocompra" placeholder="2020">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">MARCA</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_marca" id="tf_marca">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">Nº CHASSI</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_chassi" id="tf_chassi">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">COMBUSTIVEL</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_combustivel" id="tf_combustivel">
              </div>
            </div>

             <div class="form-group row">
            <label for="example-text-input" class="col-xs-2 col-form-label">COMBUSTIVEL</label>
            <div class="col-xs-10">
            <select id="combustivel_cb" class="selectpicker" name="combustivel_cb" data-width="100%">
              <option>DIESEL</option>
              <option>GASOLINA</option>
              <option>ALCOOL</option>
              <option>GNV</option>
              <option>ELETRICO</option>
            </select>
            </div>
            </div>        

        </fieldset>
          <p>
          <span>
            <button type="submit" class="btn btn-success" value="Enviar">Salvar</button>
            <button type="submit" class="btn btn-primary" value="Enviar">Buscar</button>
            <button type="submit" class="btn btn-danger" value="Enviar">Excluir</button>
          </span>
          </p>
      </form>
  </div>

    <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
    <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>
    
    <script type="text/javascript">
      
      $(function(){
            $('button').click(function(){
            //alert($('#tarifa_cb').val());


          });
      });
    </script>

</body>
</html>