<?php
$vlog = isset($_GET['erro_usuario']) ? $_GET['erro_usuario'] : 0;
$vmail = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0;
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <title>Twitter</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" id="logo" class="img-fluid"></a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Entrar</a>
              <div class="dropdown-menu" id="caixalog">

                <form method="post" action="">
                  <input type="text" placeholder="Login" id="login" name="Usuário" class="form-control">
                  <input type="password" placeholder="Senha" id="senha" name="Senha" class="form-control">
                  <button type="submit" class="btn btn-primary">Entrar</button>
                </form>

              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="inscrever-se.php">Inscrever-se</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br>
    <div class="container" id="formsize">
      <h4 style="text-align: center;">Inscreva-se já.</h4>
      <form action="registra_usuario.php" method="post" >
        <input type="text" name="log" id="log <?= $vlog == 1 ? 'invalidationServer01' : '' ?>" placeholder="Usuário" class="form-control <?= $vlog == 1 ? 'is-invalid' : '' ?>" required="" >
        <!--<div class="invalid-feedback xae">
          Usuario já em uso.
        </div>-->

        <input type="email" name="mail" id="mail <?= $vmail == 1 ? 'invalidationServer01' : '' ?>" placeholder="E-mail" class="form-control <?= $vmail == 1 ? 'is-invalid' : '' ?>" required="" >
        <!--<div class="invalid-feedback xae">
          Email já cadastrado.
        </div>-->


        <input type="password" name="pass" id="pass" placeholder="Senha" class="form-control" required="">
        <button class="btn btn-primary">Inscreva-se</button>
      </form>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>