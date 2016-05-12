<?php
/*
	Template Name: Administración y Recursos Humanos
 */

//Advanced Custom Fields


get_header(); ?>
	
	<section class="sectionCarrerasInfo">
		<div class="sectionCarrerasInfo-col1">
			<h1 class="sectionCarrerasInfo-col1_titulo">
				ADMINISTRACIÓN Y RECURSOS HUMANOS
			</h1>
			<div class="sectionCarrerasInfo-col1-videoContenedor">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/SCbvgRIdSqo" frameborder="0" allowfullscreen></iframe>
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
					¿Por qué estudiar Administración y Recursos Humanos?
				</h4>
				<p class="sectionCarrerasInfo-col2_parrafo">
					Porque serás capaz de gestionar y maximizar el potencial y talento de los integrantes de la empresa u organización de manera integral.
				</p>
				<p class="sectionCarrerasInfo-col2_parrafo">
					Algunas de tus responsabilidades serán la selección, formación y retención de personal para articular sus habilidades, inteligencia y creatividad con los objetivos organizacionales y corporativos. Tu rol será el de un líder que administra recursos e información orientados a optimizar el trabajo en equipo y mantener un clima organizacional idóneo.
				</p>
				
				<h4 class="sectionCarrerasInfo-col2_title">
					¿Por qué estudiar en la Universidad Continental?
				</h4>
				<p class="sectionCarrerasInfo-col2_parrafo">
					Porque contamos con un modelo académico fundamentado en la construcción de saberes en comunidades de aprendizaje presencial y virtual. Los métodos de caso diseñados para tu formación se cimentan en la enseñanza basada en la resolución de problemas y ejecución de proyectos.
				</p>
				<p class="sectionCarrerasInfo-col2_parrafo">
					Nuestra moderna infraestructura te permitirá disponer de ambientes presenciales y virtuales donde aprenderás a aprovechar las tecnologías de la información y telecomunicaciones. El uso de los simuladores de negocios Markstrat y BOSS para las clases prácticas de gestión de recursos humanos desarrollará tus habilidades en la toma de decisiones a nivel estratégico, táctico y operativo.
				</p>
		</div>
	</section>

<?php get_footer(); ?>