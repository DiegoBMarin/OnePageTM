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
define('DB_NAME', 'onepagetheme_db');

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
define('AUTH_KEY', 'Kz@)c_4H6(M4=<f[u@dfk)FjI*P8/tl0FzmV6BjfL,r{z,>IV|WmD}&:&T]?:y_M');
define('SECURE_AUTH_KEY', 'r&;:09qDXQ~2QQ=sEd9YVJ*DLs_,j3X>GY5v03{>.(*vd?%cvZ;W%4?A}#S=ROX.');
define('LOGGED_IN_KEY', 'C(N|(em<j)-i^AuIf+P$$|y^E:)`TPSU2;V{QCvc4*NyN2(Un.GPB)`TeI.l$rkk');
define('NONCE_KEY', '-C43vN?xNeg8~pEqw7B4bpR[7Qm@c:bcuO5W2;cRsFg@OKa1(hR>?DB/]hCVoL#N');
define('AUTH_SALT', '@D<$+)pU~QXZ$W:JQuo- <WbwwIVJ;HT+9Gmw#-[e$jM:J7#o0q4&~%x,c_/+L5b');
define('SECURE_AUTH_SALT', 'D_RSE3{1hm#~&e)*g#?CJO)j}L]bt[Y.f_ Y>KSM@6Z?~U3bWIcq_0Z`1i`|*mmH');
define('LOGGED_IN_SALT', 'A0Lb(+O>uU/s|7;KTi1 3Hz]c-nBxtaKqu+e b-B1fcO byv$QZFFJV.zbu_Sc|{');
define('NONCE_SALT', 'QX#MA#XY=8^kY3a^#t;4ND:Zw9y[?q(>!h$wT:@q!s+f%St/0D7EzjUNG=lOp?r~');

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

