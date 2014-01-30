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

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  	<div class="container" id="navBarContainer"></div>
    <div class="container" id="contentContainer">
  <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Bienvenido Juanito!</h1>
        <p class="lead">Puedes revisar como va tu puntaje en el siguiente link:</p>
        <p><a class="btn btn-lg btn-success" href="puntaje.php" role="button">Ir a mis estadisticas</a></p>
      </div>


	</div>
	<div class="container">
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
    <script src="js/ajaxHelper.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
		loadComponent("navBar.php",$("#navBarContainer"));
		loadComponent("punctuation.html",$("#contentContainer"));
	});
    
    </script>
  </body>
</html>

