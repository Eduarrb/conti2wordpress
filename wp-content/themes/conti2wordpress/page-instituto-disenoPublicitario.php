<?php
/*
	Template Name: Diseño Gráfico Publicitario
 */

//Advanced Custom Fields


get_header(); ?>
	
	<section class="sectionCarrerasInfo">
		<div class="sectionCarrerasInfo-col1">
			<h1 class="sectionCarrerasInfo-col1_titulo">
				DISEÑO GRÁFICO
			</h1>
			<div class="sectionCarrerasInfo-col1-videoContenedor">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/sV2pbfGZjAg" frameborder="0" allowfullscreen></iframe>
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
					El Diseñador Grafico Continental, es un profesional diferente, altamente creativo, sensible y muy despierto a las tendencias, Crea y desarrolla el diseño de mensajes gráficos publicitarios para su realización en piezas impresas y multimedia, supervisando la producción de manera eficiente, considerando las necesidades de su cliente y sintonizando con las tendencias y requerimientos del mercado.
				</p>
				
				<h4 class="sectionCarrerasInfo-col2_title">
					Mi campo laboral esta en:
				</h4>
				<p class="sectionCarrerasInfo-col2_parrafo">
					Compañías de arte y diseño gráfico, agencias de publicidad y marketing, empresas de consultoría y asesoría especializadas en imagen institucional, departamentos de diseño gráfico de editoras, revistas, diarios y publicaciones diversas, áreas de diseño gráfico, editorial, publicitario, virtual y ambiental, empresas de pre-prensa digital, e incluso en su propia empresa de producción gráfica y publicitaria.
				</p>
				<h4 class="sectionCarrerasInfo-col2_title">
					Lo que me hace diferente a los demás
				</h4>
				<p class="sectionCarrerasInfo-col2_parrafo">
					La Carrera de Diseñoz Gráfico es la ÚNICA Carrera Acreditada del Perú, lo cual garantiza la calidad en el proceso de aprendizaje con talleres especializados completamente equipados: Taller de Dibujo y maquetería, Taller de Fotografía, Taller de Producción audiovisual, Taller de Ilustración Digital (con tableros digitales para cada estudiante) y Laboratorios de cómputo con las características que el software de la carrera requiere.
				</p>
			
		</div>
	</section>

<?php get_footer(); ?>