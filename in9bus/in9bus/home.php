<?php
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

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <link href="css/theme.css" rel="stylesheet">
  
  <style type="text/css">
        .img {
        display: block;
        margin-left: auto;
        margin-right: auto;
      }

  </style>

  <title>IN9BUS</title>

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Popularity'],
          ['Germany', 200],
          ['United States', 300],
          ['Brazil', 400],
          ['Canada', 500],
          ['France', 600],
          ['RU', 700]
        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>

</head>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php">IN9BUS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">INÍCIO</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CADASTRO<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="cadastros/cd_users.php">USUÁRIO</a></li>
                <li class="active"><a href="cadastros/cd_empresa.php">EMPRESA</a></li>
                <li><a href="cadastros/cd_onibus.php">ONIBUS</a></li>
                <li><a href="in_anel_tarifa.php">ANEL VIÁRIOO</a></li>
                <li><a href="#">ROTA</a></li>
              </ul>
            </li>

            <li><a href="#">MANUTENÇÃO DE ROTAS</a></li>
            <li><a href="in_tarifa.php">ATUALIZAÇÃO TARIFARIA</a></li>
            <li><a href="in_oficina.php">OFICINA BUS</a></li>
            <li><a href="#">AJUDA</a></li>

            <li class="dropdown pull-menu-right">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style='text-transform:uppercase'><?php echo "$logado" ?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="php/encerrar_session.php?act=logout">SAIR</a></li>
              </ul>
            </li>
          </ul>  
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  <div class="container theme-showcase" role="main">
      <div class="jumbotron">
        <h1><center/>BEM VINDO Á IN9BUS</h1>
          <p>
           <!-- <img class="img" src="imagens/logo.png" width="400" height="200">-->
            <div id="regions_div" style="width: 1000px; height: 500px; position: relative;"></div>
  
      </div>

  <div class="page-header">
    <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
    <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>

    <footer><CENTER/>EQUIPE: ADRIANO CASSIANO - ELIAS BARRETO - MARCOS CESAR</footer>
</body>
</html>


  
