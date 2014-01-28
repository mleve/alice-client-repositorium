
$(document).ready(function(){
 
    $('#ocultInst').click(function(){
    $("#ocultable").slideToggle();
    });
    
    $('#buscar').click(function(){
    $("#resultDiv").show();
    });
 
    $('#uploadVideo').click(function(event){
    	event.preventDefault();
    	var form = $('#videoForm').serializeArray();
    	form = JSON.stringify(form,null,2);
    	//console.log(form);
    	$('.container').html(form);
    	
    });
});



