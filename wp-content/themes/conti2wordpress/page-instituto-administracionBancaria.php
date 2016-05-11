<?php
/*
	Template Name: Administración Bancaria
 */

//Advanced Custom Fields


get_header(); ?>
	
	<section class="sectionCarrerasInfo">
		<div class="sectionCarrerasInfo-col1">
			<h1 class="sectionCarrerasInfo-col1_titulo">
				ADMINISTRACIÓN BANCARIA
			</h1>
			<div class="sectionCarrerasInfo-col1-videoContenedor">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/CNuUW_a7cWE" frameborder="0" allowfullscreen></iframe>
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
					Gestiona los productos y servicios bancarios y las actividades que se desarrollan dentro las plataformas, áreas de caja o tesorería para luego desempeñarse como un eficiente gestor financiero, asesor de negocios,administrador de una agencia financiera o bancaria. El administrador bancario Continental domina la operatividad de las aplicaciones informáticas en el sistema financiero, utiliza eficientemente los recursos y optimiza la relación con los 
				</p>
				
				<h4 class="sectionCarrerasInfo-col2_title">
					Mi campo laboral esta en:
				</h4>
				<p class="sectionCarrerasInfo-col2_parrafo">
					Bancos, Cooperativas de Ahorro y Crédito, ONGs, Cajas de Ahorro y Crédito (Rural, Municipal) y AFPs. Empresas comerciales, industriales, Instituciones Educativas, Organismos del sector público. Centros de investigación económica y social, organismos no gubernamentales (ONGs) y empresas de consultoría.
				</p>
				<h4 class="sectionCarrerasInfo-col2_title">
					Lo que me hace diferente a los demás
				</h4>
				<p class="sectionCarrerasInfo-col2_parrafo">
					La Carrera de Administración del Instituto continental es la ÚNICA que ostenta la acreditación del estado Peruano, lo que garantiza la calidad de sus procesos de enseñanza.
				</p>
				<p class="sectionCarrerasInfo-col2_parrafo">
					Contaré con docentes que son actuales Gerentes y Funcionarios de las principales entidades financieras del país. (Banco de Crédito, Caja Arequipa, Financiera Confianza, BanBif, Edpyme Raíz e Interbank.)
				</p>
		</div>
	</section>

<?php get_footer(); ?>