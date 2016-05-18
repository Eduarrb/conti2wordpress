<?php
/*
	Template Name: Descubre tus talentos
*/
$titulo 		=	get_field('titulo');
$descripcion	=	get_field('descripcion');

get_header();?>
	<section class="sectionDescubreTalentos">
		<div class="sectionDescubreTalentos-col1">
			<figure class="sectionDescubreTalentos-col1_titulo">
				<img src="<?php bloginfo('stylesheet_directory');?>/assets/imagenes/descubre.png" alt="descubre" class="sectionDescubreTalentos-col1_titulo_img">
			</figure>
			<figure class="sectionDescubreTalentos-col1_saory">
				<img src="<?php bloginfo('stylesheet_directory');?>/assets/imagenes/saory2.png" alt="Saory" class="sectionDescubreTalentos-col1_saory_img">
			</figure>
		</div>
		<div class="sectionDescubreTalentos-col2">
			<h2 class="sectionDescubreTalentos-col2_titulo">
				<?php echo $titulo;?>
			</h2>
			<p class="sectionDescubreTalentos-col2_parrafo">
				<?php echo $descripcion;?>
			</p>
			<a href="#" class="sectionDescubreTalentos-col2_boton">Realiza el test</a>
		</div>
	</section>
<?php get_footer(); ?>