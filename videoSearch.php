
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
          <li><a href="principal.php">Home</a></li>
          <li class="active"><a href="videoSearch.php">Videos</a></li>
          <li><a href="puntaje.php">mi perfil</a></li>
          <li><a href="#">Descargas</a></li>
          <li><a href="#">About</a></li>
        </ul>
      </div>

      

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Busqueda de videos</h2>
              <form class="form-signin" role="form" action="">
                <p>Criterios:</p>
                <label class="checkbox">
                  <input type="checkbox" value="remember-me"> criterio 1
                </label>
                <label class="checkbox">
                  <input type="checkbox" value="remember-me"> criterio 2
                </label>
                <label class="checkbox">
                  <input type="checkbox" value="remember-me"> criterio 3
                </label>
                <label class="checkbox">
                  <input type="checkbox" value="remember-me"> criterio 4
                </label>
           
              </form>
              <button id="buscar" class="btn btn-lg btn-primary btn-block" >Buscar</button>
        </div>
        
        <div id="resultDiv" class="col-lg-8" style="display:none;">
          <h3>Resultado de busqueda</h3>
          <div class="row">
            <div class="col-md-9 resultCol">Titulo</div>
            <div class="col-md-3 resultCol">Acciones</div>
    
          </div>
          <div class="row">
            <div class="col-md-9 resultCol">Un video que cumple estos criterios</div>
            <div class="col-md-3 resultCol"><a >ver</a></div>


          </div>
          <div class="row">
            <div class="col-md-9 resultCol">Otro video que cumple estos criterios</div>
            <div class="col-md-3 resultCol"><a >ver</a></div>
          </div>
       </div>
      </div>

      <!-- Site footer -->
      <div class="footer">
        <p> <a href="https://github.com/mleve/repositorium2-api"> With Repositorium technology </a> </p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery-1.10.2.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/utils.js"></script>
  </body>
</html>

