
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Justified Nav Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/principal.css" rel="stylesheet">
    <link href="css/videoSearch.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="text-muted">Alice Client</h3>
        <ul class="nav nav-justified">
          <li ><a href="principal.php">Home</a></li>
          <li><a href="videoSearch.php">Videos</a></li>
          <li class="active"><a href="#">Mi pagina</a></li>
          <li><a href="#">Descargas</a></li>
          <li><a href="#">About</a></li>
        </ul>
      </div>

      <!-- Example row of columns -->
      <p>Puntaje por criterios: </p>
      <div class="row">
       
        <div class="col-lg-3 resultCol">
          <h2>Nombre</h2>
        </div>
        <div class="col-lg-3 resultCol">
            <h2> Credito </h2>
       </div>
        <div class="col-lg-3 resultCol">
          <h2>Puntaje</h2>
        </div>
        <div class="col-lg-3 resultCol">
            <h2> Acciones </h2>
        </div>
      </div>
      <div class="row">
       
        <div class="col-lg-3 resultCol">
         Criterio 1
        </div>
        <div class="col-lg-3 resultCol">
           10
       </div>
        <div class="col-lg-3 resultCol">
          20
        </div>
        <div class="col-lg-3 resultCol">
            <a href="videoEvaluation.php"> Ganar puntos!</a>
        </div>
      </div>
      <div class="row">
       
        <div class="col-lg-3 resultCol">
        Criterio 2
        </div>
        <div class="col-lg-3 resultCol">
           10
       </div>
        <div class="col-lg-3 resultCol">
          20
        </div>
        <div class="col-lg-3 resultCol">
            <a href="videoEvaluation.php"> Ganar puntos!</a>
        </div>
      </div>
      

      <!-- Site footer -->
      <div class="footer">
        <p> <a href="http://github.com/mleve/repositorium2-api"> With Repositorium technology </a> </p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery-1.10.2.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

