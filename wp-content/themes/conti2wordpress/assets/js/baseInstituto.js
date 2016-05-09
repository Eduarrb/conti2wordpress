var $extra1 = $("#extra1"),
	$extra2 = $("#extra2"),
	$extra3 = $("#extra3"),
	$boton1 = $("#mostrarExtra1"),
	$boton2 = $("#mostrarExtra2"),
	$boton3 = $("#mostrarExtra3");
function mostrarExtra1(){
	$extra1.slideToggle();
	return false;
}
function mostrarExtra2(){
	$extra2.slideToggle();
	return false;
}
function mostrarExtra3(){
	$extra3.slideToggle();
	return false;
}

$boton1.click(mostrarExtra1);
$boton2.click(mostrarExtra2);
$boton3.click(mostrarExtra3);
// $boton4.click(mostrarExtra4);
// $boton5.click(mostrarExtra5);
// $boton6.click(mostrarExtra6);
// $boton7.click(mostrarExtra7);
// $boton8.click(mostrarExtra8);
// $boton9.click(mostrarExtra9);
// $(".section-carreras__escuelaDiseno").mouseover(function(){
// 	$(".section-carreras__escuelaDiseno__enlacesCarreras").slideToggle();return false;})
// $(".section-carreras__escuelaDiseno").mouseout(function(){
// 	$(".section-carreras__escuelaDiseno__enlacesCarreras").css("display","none")
// })