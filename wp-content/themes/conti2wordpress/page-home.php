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
					<a href="universidad.html" class="sectionIndex-enlaces_carreras_contenedor_link">
						<img src="<?php bloginfo('stylesheet_directory');?>/assets/imagenes/instituto-nube.png" alt="" class="sectionIndex-enlaces_carreras_contenedor_link_img">
					</a>
				</figure>
				<figure class="sectionIndex-enlaces_carreras_contenedor">
					<a href="instituto.html" class="sectionIndex-enlaces_carreras_contenedor_link">
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
			<form action="php/formIndex.php" class="sectionIndex-cont-formulario" role="form" method="post">
				<div class="sectionIndex-cont-formulario__tituloContenedor">
					<h4 class="sectionIndex-cont-formulario__tituloContenedor__titulo">Solicita información</h4>
				</div>
				<div class="sectionIndex-cont-formulario__bloque1">
					<input type="text" class="sectionIndex-cont-formulario__bloque1__input" name="name" id="name" placeholder="NOMBRE" required>
					<input type="email" class="sectionIndex-cont-formulario__bloque1__input" name="email" id="email" placeholder="EMAIL" required>
					<input type="text" class="sectionIndex-cont-formulario__bloque1__input" name="city" id="city" placeholder="CIUDAD" required>
				</div>
				<div class="sectionIndex-cont-formulario__bloque2">
					<input type="text" class="sectionIndex-cont-formulario__bloque2__input" name="apellido" id="apellido" placeholder="APELLIDO" required>
					<input type="text" class="sectionIndex-cont-formulario__bloque2__input" name="mobile" id="mobile" placeholder="CELULAR" maxlength="9" pattern="[0-9]{9}"  required>
				</div>
				<div class="sectionIndex-cont-formulario__bloque3">
					<textarea name="message" id="message" cols="60" rows="10" class="sectionIndex-cont-formulario__bloque3__textarea" placeholder="ESCRIBE TUS CONSULTAS" required></textarea>
				</div>
				<button type="submit" value=" Send" class="sectionIndex-cont-formulario__btn" id="submit">Enviar</button>
			</form>
		</article>
	</section>

<?php get_footer(); ?>