<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="tela de login" content="">
    <meta name="enorsul - elias" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="bd/valida_login.php" method="POST">
      
        <h2 class="form-signin-heading" align="center">IN9BUS</h2>
        
        <label for="inputEmail" class="sr-only">LOGIN</label>
        
        <input type="text" name="user" id="user" class="form-control" placeholder="Login" required autofocus>
        
        <label for="inputPassword" class="sr-only">SENHA</label>
        
        <input type="password" name="pass" id="pass" class="form-control" placeholder="Senha" required>
       
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Lembre - me
          </label>
        </div>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entra</button>
      
      </form>

    </div> 

    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
    <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
  </body>
</html>
