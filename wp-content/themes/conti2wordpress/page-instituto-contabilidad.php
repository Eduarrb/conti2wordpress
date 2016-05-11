<?php
/*
	Template Name: Contabilidad
 */

//Advanced Custom Fields


get_header(); ?>
	
	<section class="sectionCarrerasInfo">
		<div class="sectionCarrerasInfo-col1">
			<h1 class="sectionCarrerasInfo-col1_titulo">
				CONTABILIDAD
			</h1>
			<div class="sectionCarrerasInfo-col1-videoContenedor">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/dh4GhZZicmc" frameborder="0" allowfullscreen></iframe>
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
					Realiza estudios cuantitativos y cualitativos de los ingresos y egresos económicos financieros. Actúa en los niveles de decisión de la organización. Identifica, previene y soluciona problemas que se presenta en el mundo de los negocios. Es un profesional de alto perfil, con alto espectro laboral, con formación técnica y analítica, para lograr una visión especifica de los procesos económicos de las empresas.
				</p>
				
				<h4 class="sectionCarrerasInfo-col2_title">
					Mi campo laboral esta en:
				</h4>
				<p class="sectionCarrerasInfo-col2_parrafo">
					Todo tipo de organizaciones comerciales, empresariales, de servicios y otros, pudiendo asumir cualquier reto de gestión económico contable, en costos industriales, de auditoría y de tributación.
				</p>
				<h4 class="sectionCarrerasInfo-col2_title">
					Lo que me hace diferente a los demás
				</h4>
				<p class="sectionCarrerasInfo-col2_parrafo">
					Plana docente, con experiencia en docencia, estudios de Post Grado y en actual ejercicio profesional, como asesores y consultores tributarios, contables y financieros.
				</p>
				<p class="sectionCarrerasInfo-col2_parrafo">
					Accedo constantemente a laboratorios para los cursos de especialidad. Uso intensivo de software contable.
				</p>
		</div>
	</section>

<?php get_footer(); ?>