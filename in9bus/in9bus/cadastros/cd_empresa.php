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
               <li class="active"><a href="cd_users.php">USUÁRIO</a></li>
                <li><a href="cd_empresa.php">EMPRESA</a></li>
                <li><a href="cd_onibus.php">ONIBUS</a></li>
                <li><a href="../in_anel_tarifa.php">ANEL VIÁRIOO</a></li>
                <li><a href="#">ROTA</a></li>
              </ul>
            </li>

            <li><a href="#">MANUTENÇÃO DE ROTAS</a></li>
            <li><a href="../in_tarifa.php">ATUALIZAÇÃO TARIFARIA</a></li>
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
          <legend><h1><center/>CADASTRO EMPRESA</h1></legend>

             <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">RAZÃO SOCIAL</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_modelo" id="tf_modelo">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">NOME FANTAZIA</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_anofab" id="tf_anofab" placeholder="">
              </div>
            </div>

             <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">CNPJ / CPF</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_anofab" id="tf_anofab" placeholder="">
              </div>
            </div>

             <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">ENDEREÇO</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_anofab" id="tf_anofab" placeholder="">
              </div>
            </div>

             <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">CEP</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_anofab" id="tf_anofab" placeholder="">
              </div>
            </div>

             <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">EMAIL</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_anofab" id="tf_anofab" placeholder="">
              </div>
            </div>
             
             <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">TELEFONE</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_anofab" id="tf_anofab" placeholder="">
              </div>
            </div>
            
             <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">CONTATO</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" name="tf_anofab" id="tf_anofab" placeholder="">
              </div>
            </div>

        </fieldset>
          <p>
            <button type="submit" class="btn btn-primary" value="Enviar">CADASTRAR</button>
          </p>
      </form>
  </div>

    <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
    <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>


</body>
</html>