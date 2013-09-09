$(document).ready( function(event) {
	$("#termsWrapper").hide();
	$("#conditions").click( function(e){
		e.preventDefault();
		$("#termsWrapper").show();
		$("body").scrollTop(0);
	} );
	$("#termsWrapper").click( function(){
		$("#termsWrapper").hide();
		$("body").scrollTop(0);
	} );
});