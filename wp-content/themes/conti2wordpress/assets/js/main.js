
// $('.menu-item a').addClass('menu_lista_items_link');
// $('ul .sub-menu').addClass('sub-menu');
// $('ul .sub-menu').removeClass('sub-menu');
$('#wpcf7-f172-p8-o1 .wpcf7-form').addClass('sectionIndex-cont-formulario');
$('#wpcf7-f121-p18-o1 .wpcf7-form').addClass('sectionCarrerasInfo-col1-formulario');
$('#wpcf7-f136-p118-o1 .wpcf7-form').addClass('sectionCarrerasInfo-col1-formulario');
$('.tribe-clearfix').prepend('<img/>');
$(".tribe-clearfix img").addClass('imgCalendar');
$(".imgCalendar").attr("src","../wp-content/themes/conti2wordpress/assets/imagenes/agenda.png");
$(document).ready(main);
var contador = 1;
var $boton = $('.submenu'),
	$extra = $(".children1");

function main(){
	$(".header__menu").click(function(){
		if(contador == 1){
			$('.menu').animate({
				left: '0'
			});
			contador = 0;
		}
		else{
			contador = 1;
			$('.menu').animate({
				left: '-100%'
			});
		}
	});

	// mostrar sub menus
	$('.submenu').click(function(){
		$(this).children('.children1').slideToggle();
		return false;
	});
	$('.children1').click(function(p){
		p.stopPropagation();
	});
	$('.submenu2').click(function(){
		$(this).children('.children2').slideToggle();
	});
	$('.children2').click(function(p){
		p.stopPropagation();
	});
}
// function mostrar(){
// 	$extra.slideToggle();
// 	return false;
// }
// $boton.click(mostrar);
