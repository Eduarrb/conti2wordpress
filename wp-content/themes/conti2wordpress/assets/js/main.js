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