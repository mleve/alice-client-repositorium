
function loadComponent(name,container){
	$.ajax({
		url: "components/"+name,
	}).done(function(response){
		$(container).html(response);
	});
}