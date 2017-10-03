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
  

  <title>IN9BUS</title>
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
            <li><a href="../home.php">INÍCIO</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CADASTRO<span class="caret"></span></a>
              <ul class="dropdown-menu">
               <li class="active"><a href="cd_users.php">USUÁRIO</a></li>
                <li><a href="cd_empresa.php">EMPRESA</a></li>
                <li><a href="cd_onibus.php">ONIBUS</a></li>
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
      
      <form action="../bd/in_usersbd.php" method="POST">
        
        <fieldset>
          <legend><h1><center/>CADASTRO DE USUÁRIOS</h1></legend>

            <!-- <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">ID</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_id" id="tf_id" disabled="true">

              </div>
            </div> -->            
             
             <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">NOME</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_name" id="tf_name">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">DATA DE NASCIMENTO</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_dtnasc" id="tf_dtnasc" placeholder="00/00/0000"> 
              </div>
            </div>

            <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">SEXO</label>
              <div class="col-xs-10">
              <select id="sexo_cb" class="selectpicker" name="sexo_cb" data-width="100%">
                <option>MASCULINO</option>
                <option>FEMININO</option>
                <option>OUTRO</option>
                <option>PREFIRO NÃO DIZER</option>
              </select>
              </div>
            </div>       

            <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">CPF</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_cpf" id="tf_cpf" placeholder="Só número">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">RG</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_rg" id="tf_rg" placeholder="Só número">
              </div>
            </div>


            <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">EMAIL</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_email" id="tf_email">
              </div>
            </div>


            <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">ENDEREÇO</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_endereco" id="tf_endereco" placeholder="R. Santa Maria">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">NUMERO</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_numeroksa" id="tf_numeroksa">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">COMPLEMENTO</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_complemento" id="tf_complemento">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">BAIRRO</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_bairro" id="tf_bairro">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">UF</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_uf" id="tf_uf">
              </div>
            </div>


<!--              <div class="form-group row">
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
            </div>-->

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