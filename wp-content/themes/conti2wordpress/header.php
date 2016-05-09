<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package continental_to_wordpress
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/main.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'conti2wordpress' ); ?></a>

	<header class="header">
		<figure class="header-logoResponsive">
			<img src="<?php bloginfo('stylesheet_directory') ?> /assets/imagenes/logo.png" alt="" class="header-logoResponsive_img">
		</figure>
		<!-- boton menu -->
		<div class="header__menu">
			<a href="#" class="header__menu__btn-menu"><span class="icon-menu"></span></a>
		</div>
		<div class="header-contenedor">
			<div class="header-contenedor-raw1">
				<figure class="header-contenedor-raw1_logo">
					<a href="index.html"><img src="<?php bloginfo('stylesheet_directory') ?> /assets/imagenes/logo.png" alt="" class="header-contenedor-raw1_logo_img"></a>
					
				</figure>
				<div class="header-contenedor-raw1_redes">
					<ul class="header-contenedor-raw1_redes_lista">
						<li class="header-contenedor-raw1_redes_lista_items"><a href="https://www.youtube.com/user/conticanalutube" class="header-contenedor-raw1_redes_lista_items_icon"><img src="<?php bloginfo('stylesheet_directory') ?> /assets/imagenes/youtube.png" alt="youtube"> </a></li>
						<li class="header-contenedor-raw1_redes_lista_items"><a href="https://twitter.com/ucontinental" class="header-contenedor-raw1_redes_lista_items_icon"><img src="<?php bloginfo('stylesheet_directory') ?> /assets/imagenes/twitter.png" alt="twitter"></a></li>
						<li class="header-contenedor-raw1_redes_lista_items"><a href="https://www.facebook.com/uni.continental/" class="header-contenedor-raw1_redes_lista_items_icon"><img src="<?php bloginfo('stylesheet_directory') ?> /assets/imagenes/facebook.png" alt="facebook"></a></li>
					</ul>
				</div>
			</div><!-- header-contenedor-raw1 -->
		</div>
	</header>  
	<?php
		wp_nav_menu( array(
				'theme_location'	=>	'primary',
				'container'			=>	'nav',
				'container_class'	=>	'menu',
				'menu_class'		=>	'menu_lista'			)
		);
	?>
	<!-- <nav class="menu">
		<ul class="menu_lista">
			sub menu
			<li class="menu_lista_items"><a href="index.html" class="menu_lista_items_link">Inicio</a></li>
			<li class="menu_lista_items submenu">
				<a href="#" class="menu_lista_items_link">Carreras <span class="icon-chevron-down"></span>
				</a>
				<ul class="children1">
					<li style=""><a href="instituto.html" onMouseOver="this.style.background='#0160a7'"onMouseOut="this.style.background='#0080e0'">INSTITUTO</a></li>
					<li class="submenu2">
						<a href="#" onMouseOver="this.style.background='#0160a7'"onMouseOut="this.style.background='#0080e0'">UNIVERSIDAD<span class="icon-chevron-down"></span></a>
						<ul class="children2">
							<li onMouseOver="this.style.background='#0160a7'"onMouseOut="this.style.background='#00ace7'"><a href="universidad.html" >HUANCAYO</a></li>
							<li onMouseOver="this.style.background='#0160a7'"onMouseOut="this.style.background='#00ace7'"><a href="uniArequipa.html" >AREQUIPA</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="menu_lista_items"><a href="descubreTalentos.html" class="menu_lista_items_link">descubre tus talentos</a></li>
			<li class="menu_lista_items"><a href="admision.html" class="menu_lista_items_link">admisión</a></li>
			<li class="menu_lista_items"><a href="agenda.html" class="menu_lista_items_link">agenda</a></li>
			<li class="menu_lista_items"><a href="visitanos.html" class="menu_lista_items_link">visitanos</a></li>
		</ul>
	</nav> -->
