<?php 
	include_once '../RepositoriumConnector/curlHelper.php';
	include_once '../RepositoriumConnector/urlResolver.php';
	include_once 'utils.php';
?>
<form id="videoForm" class="form-signin" role="videoUpload" action="principal.php">
	<h2 class="form-signin-heading">Subir un nuevo video</h2>
	<div class="input-group">
		<span class="input-group-addon">Seccion</span>
		<div class="form-control">
			<input type="radio" name="seccion" value="s1"> Seccion 1 
			<input type="radio"	name="seccion" value="s2"> Seccion 2
		</div>
	</div>
	<br>
	<div class="input-group">
		<span class="input-group-addon">Título</span> 
		<input name="name" type="text"class="form-control" 
		     placeholder="Título del video">
	</div>
	<br>
	<div class="input-group">
		<span class="input-group-addon"> Criterios que cumple el video: </span>
		<div class="form-control">
			<?php 
				$url =UrlResolver::getUrl("custom","/apps/4/criteria");
				$criteria = make_get($url, null);
				$criteria = json_decode($criteria);
				create_checkbox("criteria", $criteria, "criterion_id", "name");
				
			?>
		</div>
	</div>
	<br>
	<div class="input-group">
		<span class="input-group-addon">Descripción</span> 
		<textarea form="videoForm" name="description" class="form-control" placeholder="Título del video"></textarea>
	</div>
	<br>
	<div class="input-group">
		<span class="input-group-addon">Link del video</span> 
		<input type="text" class="form-control" name="filesUrl" 
		     placeholder="Copia y pega el link de youtube de tu video">
	</div>
	<br>
   <button id="uploadVideo" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
   </form>
<script type="text/javascript">

	$.fn.serializeObject = function()
	{
	    var o = {};
	    var a = this.serializeArray();
	    $.each(a, function() {
	        if (o[this.name] !== undefined) {
	            if (!o[this.name].push) {
	                o[this.name] = [o[this.name]];
	            }
	            o[this.name].push(this.value || '');
	        } else {
	            o[this.name] = this.value || '';
	        }
	    });
	    return o;
	};
	
	$(".btn").click(function(event){
		event.preventDefault();
		var form = $(this).parent();
		var data = form.serializeObject();
		var url = "";
		if(form.attr("role") == "videoUpload")
			url = "RepositoriumConnector/videoUpload.php";
		else
			url = "";
		$.ajax({
			url : url,
			data : data,
			success : function(response){
				var resp = JSON.parse(response);
				if('error' in resp)
					alert(resp.error);
				else{
					alert("Video creado con exito");
					loadComponent("videoUpload.php",$("#contentContainer"));
				}
			}								
		});	
		
		
	});
</script>