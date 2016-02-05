var mostrar=true;

$('.carousel').carousel({
		interval:3000,
		//pause:"hover"
})
$('#vervideo').click(function(e){

	if (mostrar) {
		$('.videos').css("display", "block");
		$('#vervideo').text('Ocultar video');
		$('.btnver').css("padding-bottom", "0px");
		mostrar=false;

	}else {
		$('.videos').css("display", "none");
		$('#vervideo').text('Mostrar video');
		$('.btnver').css("padding-bottom", "50px");
		mostrar=true;
	}        
});
    