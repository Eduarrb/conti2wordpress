<?php
/*
	Template Name: Ingeniería Mecatrónica
 */

//Advanced Custom Fields

$titulo_principal		=	get_field('titulo_principal');
$video					=	get_field('video');
$parrafo1				=	get_field('parrafo_1');
$titulo1				=	get_field('titulo_1');
$parrafo2				=	get_field('parrafo_2');
$titulo2				=	get_field('titulo_2');


get_header(); ?>
	
	<section class="sectionCarrerasInfo">
		<div class="sectionCarrerasInfo-col1">
			<h1 class="sectionCarrerasInfo-col1_titulo">
				<?php echo $titulo_principal;?>
			</h1>
			<div class="sectionCarrerasInfo-col1-videoContenedor">
				<iframe src="<?php echo $video?>" frameborder="0" allowfullscreen></iframe>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
		<div class="sectionCarrerasInfo-col2">
			<h4 class="sectionCarrerasInfo-col2_title">
				<?php echo $titulo1;?>
			</h4>
			<p class="sectionCarrerasInfo-col2_parrafo">
				<?php echo $parrafo1;?>
			</p>
			<h4 class="sectionCarrerasInfo-col2_title">
				<?php echo $titulo2;?>
			</h4>
			<p class="sectionCarrerasInfo-col2_parrafo">
				<?php echo $parrafo2;?>
			</p>
		</div>
	</section>

<?php get_footer(); ?>