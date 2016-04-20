<?php
define('FS_METHOD', 'direct');
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'Artissue');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'r;I=sa;Hx1wrFW1>.IG1mg6LMAE7YLJk#8S[|4[D ~:aqV6Yx0D 1,1JwZ9~@/S%');
define('SECURE_AUTH_KEY', 'X}z?h9iBrsG7Pcn+&e0D{g;cC_w`/H_1b#WB}aL/VN38U5wCMD_pk63@!_qc|BY+');
define('LOGGED_IN_KEY', '3`f7{svpTHG suoy]ZqX4Z]f<1x~@n~_1TJ27o*yV!3W:@iCigyT$~R{byZbJ,<`');
define('NONCE_KEY', 'k,1Y;(i;lt$~joVrED:Q]xy?GFY`(yy$]p,De)2JY{`NR=/{:;~Z1ef>uU&<[Cg2');
define('AUTH_SALT', '`l1DQ${wfH-qtCgj-L& 2aZ`eDRx,p.al5~}liVd,stvwFr)5{JvO~y$eTW+N[Mu');
define('SECURE_AUTH_SALT', 'a@%1=-5io3p5b}7oK>uH}L!D<[Ud? sxQ-eoRvxW~ 0s; )j`sWGE8~Y=xh=P8;.');
define('LOGGED_IN_SALT', '@^2M|=ts#!a:y;ijRxP.@~nq/-(zDCWmF^`dn1[gZ2R`XQ;+$bGDSaZ{=,3fH$ J');
define('NONCE_SALT', 'p`QnLcYyX!m!.rJQ%,McIRW!Z@%C x6Hm1#yz$(,wFA>L#3y%cm?)m(.1_-mnp-b');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'at_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

