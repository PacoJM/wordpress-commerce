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
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'wordpress');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'wordpress');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'WT1-Jp*UH%GrS1GBr(($[?1$-[qD)K~{ ^V4(;=N~~k7~Zn:r=yn=siKM+1N*3-['); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'Vt9hXSf[f]PF8wUL]`d`U>Dp+g|uF$`dqh*P`fc><cYG/Oq*^ <5=fHLw*L#j-Nm'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', ',9DTGA+3kqd+(K92u@`62THC>3h&U`CB ~Lzn8w`XJTZdl3blO]kki$*|GltKYV]'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'KtNzoY]y0x+u{rkM1^3HtAbMr;[:> Up>Zr.D4+)]^&,Eoo}jfuQr>FsP?(x-kMM'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '$-hz>2cK] ^hVRfD-uMnf}*ON_Al)Us+Yx0}_P}rj]$Fs.sH`%RLH8IEP=.TxBE0'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'wSUQp)I762PKr[-n$NoMeV^4k+IYG)l:<V^k8rQpRK+(,]rR>,,TH5sme!7S|<~>'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '?2Go)Bp_8ax8f|_Zk`kaRob;GM[t,7*-6QUMndd{6 BpbE*}`oqrnZsiFg|Z?ZNo'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '+kW^YRZdry{+Ju)9KCr)D!0-AU#i8p%-]*`*e;I.q}.@:Pk(Z~(v>8~RwPmCU3Zo'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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

