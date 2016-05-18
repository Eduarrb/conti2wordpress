<?php
/*
	Template Name: Index page
 */

//Advanced Custom Fields

$titulo_principal		=	get_field('titulo_principal');
$index_video			=	get_field('index_video');



get_header(); ?>
	
	<section class="sectionIndex">
		<article class="sectionIndex-titulo">
			<h1 class="sectionIndex-titulo_cont">
				<?php echo $titulo_principal;?>
			</h1>
		</article>
		<article class="sectionIndex-video">
			<figure class="sectionIndex-video-contenedor">
				<img src="<?php bloginfo('stylesheet_directory');?>/assets/imagenes/iphone6.png" alt="" class="sectionIndex-video-contenedor_img">
			</figure>
			<div class="sectionIndex-video_caja">
				<div class="sectionIndex-video_caja_youtube">
					<iframe src="<?php echo $index_video?>?rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</article>
		<article class="sectionIndex-enlaces">
			<div class="sectionIndex-enlaces_carreras">
				<figure class="sectionIndex-enlaces_carreras_contenedor">
					<a href="<?php bloginfo('url');?>/instituto/" class="sectionIndex-enlaces_carreras_contenedor_link">
						<img src="<?php bloginfo('stylesheet_directory');?>/assets/imagenes/instituto-nube.png" alt="" class="sectionIndex-enlaces_carreras_contenedor_link_img">
					</a>
				</figure>
				<figure class="sectionIndex-enlaces_carreras_contenedor">
					<a href="<?php bloginfo('url');?>/universidad/" class="sectionIndex-enlaces_carreras_contenedor_link">
						<img src="<?php bloginfo('stylesheet_directory');?>/assets/imagenes/universidad-nube.png" alt="" class="sectionIndex-enlaces_carreras_contenedor_link_img">
					</a>
				</figure>
			</div>
			<div class="sectionIndex-enlaces_joven">
				<figure class="sectionIndex-enlaces_joven_contenedor">
					<img src="<?php bloginfo('stylesheet_directory');?>/assets/imagenes/Enzo1.png" alt="" class="sectionIndex-enlaces_joven_contenedor_img">
				</figure>
			</div>
		</article>
		<article class="sectionIndex-cont">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</article>
	</section>

<?php get_footer(); ?>