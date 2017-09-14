$(document).ready(function(){
	$( ".form-group" ).focusin(function() {
		$( this ).find( ".icon" ).animate({"opacity":"0"}, 200);
	});

	$( ".form-group" ).focusout(function() {
		$( this ).find( ".icon" ).animate({"opacity":"1"}, 300);
	});
});