<?php
/*
	Template Name: Diseño de Interiores
 */

//Advanced Custom Fields


get_header(); ?>
	
	<section class="sectionCarrerasInfo">
		<div class="sectionCarrerasInfo-col1">
			<h1 class="sectionCarrerasInfo-col1_titulo">
				DISEÑO DE INTERIORES
			</h1>
			<div class="sectionCarrerasInfo-col1-videoContenedor">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Qzo3-cAnrZk" frameborder="0" allowfullscreen></iframe>
			</div>
			<form action="php/formInstituto.php" class="sectionCarrerasInfo-col1-formulario" role="form" method="post">
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
			
				<p class="sectionCarrerasInfo-col2_parrafo">
					Es un profesional completo, creativo, innovador y atrevido. Conjuga la originalidad, funcionalidad e innovación, para crear espacios para disfrutar, vivir, trabajar, comunicar, y ver, a partir del desarrollo de su creatividad y sensibilidad, buscando mejorar la calidad de vida de las personas, en función de sus necesidades.
				</p>
				
				<h4 class="sectionCarrerasInfo-col2_title">
					Mi campo laboral esta en:
				</h4>
				<p class="sectionCarrerasInfo-col2_parrafo">
					Empresas dedicadas a la construcción y remodelación de espacios interiores, Comercialización de elementos para la decoración y la ambientación interior permanente o temporal, centros comerciales, oficinas de alta gama, tiendas por departamentos, estudios de arquitectos, también puede brindar sus servicios independientes o asociados como asesores.
				</p>
				<h4 class="sectionCarrerasInfo-col2_title">
					Lo que me hace diferente a los demás
				</h4>
				<p class="sectionCarrerasInfo-col2_parrafo">
					Dominarás las diferentes técnicas para el proceso creativo y desarrollo de actividades complementarias, tales como el dibujo técnico, elaboración de maquetas a escala, representación gráfica digital en 2D “CAD” (Computer Assisted Drawing), representación y modelado en 3 dimensiones (3D Studio), desarrollo de proyectos con tecnología BIM (Building Information Modeling‎) a través de plataformas como Revit Architecture (Autodesk). Conocerás lo relacionado a administración de obras, como metrados y presupuestos, complementándolo con el manejo de software especializado como el S10.
				</p>
				
		</div>
	</section>

<?php get_footer(); ?>