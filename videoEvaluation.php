
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
          <li><a href="videoSearch.php">Videos</a></li>
          <li class="active"><a href="#">mi perfil</a></li>
          <li><a href="#">Descargas</a></li>
          <li><a href="#">About</a></li>
        </ul>
      </div>
      
     <br>
     <div class="row">
        <div class="col-md-3"><h3>Evaluación de videos<h3></div>
        <div class="col-md-9"> <button id="ocultInst"type="button" class="btn btn-lg btn-info">Instrucciones</button></div>
     </div>
      
     <div class="row" id="ocultable" style="display:none;">
        <p> Se te presentaran hasta 4 videos, y debes decidir si estos cumplen o no con el criterio
        descrito a continuación, el servidor sabe la clasificación de algunos de estos videos, pero
        los nuevos son clasificados gracias a tus respuestas. <p>
        <p> Una vez hecha la clasificación, haz click en Evaluar para evaluarla, si respondiste
            correctamente, ganaras creditos y puntaje en este criterio! <p>
      </div>
       
            <!-- Jumbotron -->
      <div class="jumbotron">
        <h2>Hay al menos 3 escenas en addicion de las paginas de titulo y conclusión</h2>
        
        <p class="lead">El video incluye una escena de titulo,
        conclusión, y al menos 3 escenas mas</p>
        <div class="row">
            <div class="col-md-6">
                <p> Video 1</p>
                <iframe width="420" height="315" src="//www.youtube.com/embed/Xiy6kTz-m_A" frameborder="0" allowfullscreen></iframe>
                <p> Cumple el criterio? :
                <label><input type="radio" name="cumple1" value="cumple1">Si</label>
                <label><input type="radio" name="cumple1" value="cumple1">No</label>
                </p>
            </div>
            <div class="col-md-6">
                <p>Video 2</p>
                <iframe width="420" height="315" src="//www.youtube.com/embed/Xiy6kTz-m_A" frameborder="0" allowfullscreen></iframe>
                <p> Cumple el criterio? :
                <label><input type="radio" name="cumple2" value="cumple1">Si</label>
                <label><input type="radio" name="cumple2" value="cumple1">No</label>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p> Video 3</p>
                <iframe width="420" height="315" src="//www.youtube.com/embed/Xiy6kTz-m_A" frameborder="0" allowfullscreen></iframe>
                <p> Cumple el criterio? :
                <label><input type="radio" name="cumple3" value="cumple1">Si</label>
                <label><input type="radio" name="cumple3" value="cumple1">No</label>
                </p>
            </div>
            <div class="col-md-6">
                <p>Video 4</p>
                <iframe width="420" height="315" src="//www.youtube.com/embed/Xiy6kTz-m_A" frameborder="0" allowfullscreen></iframe>
                <p> Cumple el criterio? :
                <label><input type="radio" name="cumple4" value="cumple1">Si</label>
                <label><input type="radio" name="cumple4" value="cumple1">No</label>
                </p>
            </div>
        </div>
         <p><a class="btn btn-lg btn-success" href="#" role="button">Evaluar</a></p>
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

