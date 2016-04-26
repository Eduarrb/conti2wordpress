var $extra1 = $(".sectionInstituto-carreras__escuelaDiseno__enlacesCarreras"),
	$extra2 = $(".sectionInstituto-carreras__escuelaTecnologia__enlacesCarreras"),
	$extra3 = $(".sectionInstituto-carreras__escuelaNegocios__enlacesCarreras"),
	$extra4 = $(".sectionInstituto-carreras__escuelaGastronomia__enlacesCarreras"),
	$extra5 = $(".sectionUniversidad-carreras__ingenieria__enlacesCarreras"),
	$extra6 = $(".sectionUniversidad-carreras__cienciasEmpresa__enlacesCarreras"),
	$extra7 = $(".sectionUniversidad-carreras__cienciasSalud__enlacesCarreras"),
	$extra8 = $(".sectionUniversidad-carreras__humanidades__enlacesCarreras"),
	$extra9 = $(".sectionUniversidad-carreras__derecho__enlacesCarreras"),
	$extra10 = $('.sectionUniversidadArequipa-carreras__ingenieria__enlacesCarreras'),
	$extra11 = $('.sectionUniversidadArequipa-carreras__cienciasEmpresa__enlacesCarreras'),
	$extra12 = $('.sectionUniversidadArequipa-carreras__humanidades__enlacesCarreras'),
	$extra13 = $('.sectionUniversidadArequipa-carreras__derecho__enlacesCarreras'),
	$boton1 = $("#mostrarExtra1"),
	$boton2 = $("#mostrarExtra2"),
	$boton3 = $("#mostrarExtra3"),
	$boton4 = $("#mostrarExtra4"),
	$boton5 = $("#mostrarExtra5"),
	$boton6 = $("#mostrarExtra6"),
	$boton7 = $("#mostrarExtra7"),
	$boton8 = $("#mostrarExtra8");
	$boton9 = $("#mostrarExtra9");
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
function mostrarExtra4(){
	$extra4.slideToggle();
	return false;
}
function mostrarExtra5(){
	$extra5.slideToggle();
	$extra10.slideToggle();
	return false;
}
function mostrarExtra6(){
	$extra6.slideToggle();
	$extra11.slideToggle();
	return false;
}
function mostrarExtra7(){
	$extra7.slideToggle();
	return false;
}
function mostrarExtra8(){
	$extra8.slideToggle();
	$extra12.slideToggle();
	return false;
}
function mostrarExtra9(){
	$extra9.slideToggle();
	$extra13.slideToggle();
	return false;
}
$boton1.click(mostrarExtra1);
$boton2.click(mostrarExtra2);
$boton3.click(mostrarExtra3);
$boton4.click(mostrarExtra4);
$boton5.click(mostrarExtra5);
$boton6.click(mostrarExtra6);
$boton7.click(mostrarExtra7);
$boton8.click(mostrarExtra8);
$boton9.click(mostrarExtra9);
// $(".section-carreras__escuelaDiseno").mouseover(function(){
// 	$(".section-carreras__escuelaDiseno__enlacesCarreras").slideToggle();return false;})
// $(".section-carreras__escuelaDiseno").mouseout(function(){
// 	$(".section-carreras__escuelaDiseno__enlacesCarreras").css("display","none")
// })