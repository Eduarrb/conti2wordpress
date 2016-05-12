<?php
/*
	Template Name: Medicina Humana
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
			<form action="php/formUniversidad.php" class="sectionCarrerasInfo-col1-formulario" role="form" method="post">
				<!-- <div class="sectionCarrerasInfo-col1-formulario__tituloContenedor">
					<h4 class="sectionCarrerasInfo-col1-formulario__tituloContenedor__titulo">Solicita información</h4>
				</div> -->
				<div class="sectionCarrerasInfo-col1-formulario__bloque1">
					<input type="text" class="sectionCarrerasInfo-col1-formulario__bloque1__input" name="name" id="name" placeholder="NOMBRE" required>
					<input type="email" class="sectionCarrerasInfo-col1-formulario__bloque1__input" name="email" id="email" placeholder="EMAIL" required>
					<input type="text" class="sectionCarrerasInfo-col1-formulario__bloque1__input" name="city" id="city" placeholder="CIUDAD" required>
				</div>
				<div class="sectionCarrerasInfo-col1-formulario__bloque2">
					<input type="text" class="sectionCarrerasInfo-col1-formulario__bloque2__input" name="apellido" id="apellido" placeholder="APELLIDO" required>
					<input type="text" class="sectionCarrerasInfo-col1-formulario__bloque2__input" name="mobile" id="mobile" placeholder="CELULAR" maxlength="9" pattern="[0-9]{9}"  required>
				</div>
				<div class="sectionCarrerasInfo-col1-formulario__bloque3">
					<textarea name="message" id="message" cols="60" rows="10" class="sectionCarrerasInfo-col1-formulario__bloque3__textarea" placeholder="ESCRIBE TUS CONSULTAS" required></textarea>
				</div>
				<button type="submit" value=" Send" class="sectionCarrerasInfo-col1-formulario__btn" id="submit">INSCRIBETE</button>
			</form>
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