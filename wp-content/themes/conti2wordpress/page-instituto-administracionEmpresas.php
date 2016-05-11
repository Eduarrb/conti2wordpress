<?php
/*
	Template Name: Administración de Empresas
 */

//Advanced Custom Fields


get_header(); ?>
	
	<section class="sectionCarrerasInfo">
		<div class="sectionCarrerasInfo-col1">
			<h1 class="sectionCarrerasInfo-col1_titulo">
				ADMINISTRACIÓN DE EMPRESAS
			</h1>
			<div class="sectionCarrerasInfo-col1-videoContenedor">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/gium6S68rPA" frameborder="0" allowfullscreen></iframe>
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
					Crea, pone en marcha y administra en forma exitosa los recursos humanos, financieros y la comercialización de productos y/o servicios de la empresa, supervisa la logística, el manejo de almacén y los métodos de organización, según los criterios de eficiencia y calidad, con iniciativa y espíritu emprendedor. El Administrador continental, está en capacidad de realizar su propio emprendimiento e implementar con éxito su propia empresa, convirtiéndose en fuente de desarrollo económico y empleabilidad.
				</p>
				
				<h4 class="sectionCarrerasInfo-col2_title">
					Mi campo laboral esta en:
				</h4>
				<p class="sectionCarrerasInfo-col2_parrafo">
					Empresas de los diversos sectores (minero, agropecuario, industrial, financiero, comercio exterior y servicios). Su propia empresa.
				</p>
				<h4 class="sectionCarrerasInfo-col2_title">
					Lo que me hace diferente a los demás
				</h4>
				<p class="sectionCarrerasInfo-col2_parrafo">
					La Carrera de Administración del Instituto continental es la ÚNICA que ostenta la acreditación del estado Peruano, lo que garantiza la calidad de sus procesos de enseñanza
				</p>
				<p class="sectionCarrerasInfo-col2_parrafo">
					Nuestros docentes son profesionales en ejercicio, que garantizan el proceso enseñanza-aprendizaje, donde le práctica está garantizada en más de un 70%. Son asesores, consultores y emprendedores de reconocido éxito regional y nacional.
				</p>
		</div>
	</section>

<?php get_footer(); ?>