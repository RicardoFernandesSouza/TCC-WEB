<?
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name="description" content="Login ToHome">
    <meta name="author" content="ToHome">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Login ToHome</title>
      <div align="center">
        <img src="logo.png"
             width="300"
             height="300"
             align="bottom" />
      </div>
    <!-- Bootstrap core CSS -->
    <link href="css/login_bootstrap.min.css" rel="stylesheet">

    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="css/login_signin.css" rel="stylesheet">

    <script src="js/login_ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST" action= 'includes/login.inc.php'>
        <!--<h2 class="form-signin-heading text-center">To Home</h2>-->
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" name="uid" class="form-control" placeholder="Usuário" required autofocus><br />
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="pwd" class="form-control" placeholder="Senha" required>
        <div class="checkbox">
          <label>
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>

    </div>


    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
