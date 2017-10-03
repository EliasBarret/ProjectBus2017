<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<link href="css/theme.css" rel="stylesheet">

	<title>Enorsul_Consult</title>
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
            <li><a href="home.php">Início</a></li>
            <li class="active"><a href="consult_tela1.php">Consultar</a></li>
            <li><a href="bd/consult_bd.php">Geral</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container theme-showcase" role="main">
      <div class="jumbotron">
		<div class = "form-group row">
			
			<form action="consult_tela1.php" method="POST">
				
				<fieldset>
					<legend aling ="center" ><h1>Inserir Matrícula</h1></legend>
					<p>
						<label for="matricula">Matricula: </label>
						<input class="form-control" type="text" name="matricula" id="matricula">
					</p>
				</fieldset>
					<p>
						<button type="submit" class="btn btn-primary" value="Enviar">Enviar</button>
					</p>
			</form>
	</div>
	<script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
    <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>  
</body>
</html>