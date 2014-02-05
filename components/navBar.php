<?php session_start();?>
<div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="principal.php">Alice Client</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Videos <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a id="navVideoSearch" href="#">Buscar</a></li>
                <li><a id="navVideoUpload" href="#">Subir</a></li>
                <li><a id="navVideoEvaluate" href="#">evaluar</a></li>
                <!--  
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
             	-->
              </ul>
            </li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="">Bienvenido <?php echo $_SESSION['user']->username;?></a></li>
            <li><a href="./exit.php">log out</a></li>
          </ul>
          
        </div><!--/.nav-collapse -->
</div>
<script type="text/javascript">
$("#navVideoSearch").click(function(event){
   	event.preventDefault();
   	loadComponent("searchVideo.html",$("#contentContainer"));
});

$("#navVideoEvaluate").click(function(event){
   	event.preventDefault();
   	loadComponent("evaluate.html",$("#contentContainer"));
});

$("#navVideoUpload").click(function(event){
   	event.preventDefault();
   	loadComponent("videoUpload.php",$("#contentContainer"));
});

</script>