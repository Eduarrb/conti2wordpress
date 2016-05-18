<form action="<?php bloginfo('template_directory');?>/assets/php/formIndex.php" class="sectionIndex-cont-formulario" role="form" method="post">
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





<div class="sectionIndex-cont-formulario__tituloContenedor">
	<h4 class="sectionIndex-cont-formulario__tituloContenedor__titulo">Solicita información</h4>
</div>
<div class="sectionIndex-cont-formulario__bloque1">
	
	[text* your-name class:sectionIndex-cont-formulario__bloque1__input id:name placeholder "NOMBRE"]
	
	[email* your-email class:sectionIndex-cont-formulario__bloque1__input id:email placeholder "EMAIL"]
	
	[text* your-city class:sectionIndex-cont-formulario__bloque1__input id:city placeholder "CIUDAD"]
</div>
<div class="sectionIndex-cont-formulario__bloque2">
	
	[text* your-lastname class:sectionIndex-cont-formulario__bloque2__input id:apellido placeholder "APELLIDO"]

	[text* your-fone class:sectionIndex-cont-formulario__bloque2__input id:mobile maxlength:9 placeholder "CELULAR"]
</div>
<div class="sectionIndex-cont-formulario__bloque3">

	[textarea* your-message class:sectionIndex-cont-formulario__bloque3__textarea id:message x8 placeholder "ESCRIBE TUS CONSULTAS"]
</div>
[submit class:sectionIndex-cont-formulario__btn id:submit "INSCRIBETE"]