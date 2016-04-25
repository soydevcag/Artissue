<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package storefront
 */

get_header(); ?>
<div class="container">
	
</div>
	
		

<form method="post" action="http://productivitymanager.ges.com.co/controlador/ControladorLogin.php">
	<input type="text" name="user">
	<input type="text" name="pass">
	<button type="submit" name="ingreso">Ingresar</button>
</form>

<?php get_footer(); ?>
