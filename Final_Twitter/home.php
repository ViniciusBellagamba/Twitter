<?php
session_start();

if (empty($_SESSION['usuario']) || empty($_SESSION['senha'])) {
  header('Location:index.php?erro=1');
}
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 

    <title>Twitter</title>

    <script type="text/javascript">


      $(document).ready(function(){
      //Inicio Ready

      $.ajax({url: "get.php"}).done(function(html) {
      $("#tweet_local").append(html);
      });


      function load_data(query)
      {

      $.ajax({
        url: "get_pessoas.php", 
        method: "POST",
        data: { query : query } }).done(function(data){
        $("#campo").append(data);

      });

      }

        $('#txt_pessoa').keyup(function(){
          var search = $(this).val();
          if(search != '')
          {
           $( "#campo" ).empty();
           load_data(search);
          }
          else
          {
          $( "#campo" ).empty();     
          }
        });



      //Fim Ready
      });
    
    </script>

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" id="logo" class="img-fluid"></a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              
               
                  <!--Aqui cego-->
                 <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Buscar no Twitter" aria-label="Recipient's username" aria-describedby="basic-addon3" maxlength="140" id="txt_pessoa" name="txt_pessoa">
                  <!--<div class="input-group-append">
                    <button class="btn btn-secondary">Button</button>
                  </div>-->

                 

            </li>
            <li class="nav-item" style="margin-left: 7px">
              <a class="nav-link" href="sair.php">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br><br>

    <div class="container">

      <div class="row">
        <div class="col-md-3 col-xs-6">
          
          <div class="card text-white bg-primary mb-3  text-center" style="max-width: 18rem;">
            <div class="card-header"><?= $_SESSION["usuario"]; ?></div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">Tweets</div>
                  <div class="col-md-6">Seguidores</div>
                </div>
                <div class="row">
                  <div class="col-md-6" id="xae">1</div>
                  <div class="col-md-6" id="xae">1</div>
                </div>
             </div>
          </div>

        </div>
        <div class="col-md-6">
          <div class="card text-white bg-primary mb-3">
            <div class="card-body">
              <form class="form-group" id="form_tweet" method="post" action="inclui_tweet.php">

                 <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="O que está acontecendo?" aria-label="Recipient's username" aria-describedby="basic-addon2" maxlength="140" id="txt_tweet" name="txt_tweet">
                  <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit" id="btn_tweet">Button</button>
                  </div>

                </form> 
              </div>
            </div>
          </div>

          <div id="tweet_local"></div>

        </div>

        <div class="col-md-3">
          <div id="campo">
            <!--campo-->
          </div>
        </div>

      </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>