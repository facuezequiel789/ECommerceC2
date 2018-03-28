<?php
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
define('DB_NAME', 'u121775660_fligh');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'u121775660_facu');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'asddsa232');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'mysql.hostinger.com.ar');

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
define('AUTH_KEY', 'mxt&g <.0(vhMLUGe9EW}`CS.*|g6Gg&{hXldcfR0ms&b$gNB(tNQBLv0NqC>]E1');
define('SECURE_AUTH_KEY', 'y!mDB?`yFTH#dSy8o%bG1tt**3CTN?*Fw9&U(N6Uk`IuZI<QE.^O+nP~b+:<[%[n');
define('LOGGED_IN_KEY', ' 2fQ3SdQqD=/y35TGX9`y(*M6r-_$xSXH{83?*,[O#2L ;l^R(<.MHuV{PJ ]Und');
define('NONCE_KEY', 'f-g*sCA_dOA-F}JhDl*6x,bE;^WCDNfmF<5Q($?f,tPHAIK;F0 ffbUu;I*BIxi;');
define('AUTH_SALT', '?0a&=sD6xitcca|j<h:k){iL*OfmSs`w(Bg;,(9/>fScxM5Ig<x:^RsTz$67<tI^');
define('SECURE_AUTH_SALT', '@2:RjSdVsyDCJgph]<qO:=K)jjX8F8SuU&)Jz/jCNR(I_:qpBZ]L(^Upg`L2Y4R0');
define('LOGGED_IN_SALT', '5;161ChXK5_P4IHdp:$S;hZYX%@siez1s[r|#7i3n.}[zwpP9[mfg7nv]raFwhn@');
define('NONCE_SALT', 'H:zJ.!tNK<miG}Gu[Qi!;PyV{K]8cG{WN%-Z85K|1Rh8>GkL1ER-bp0A=:7pZh&=');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

