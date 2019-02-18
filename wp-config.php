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
define('DB_NAME', 'db-americana');

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
define('AUTH_KEY', 'MWb_P<< *?7sMb-4P-QF}OzZ)%I.G#yvlh;9E|/4~lkg){t7tET*U=NJ%7.*IN=m');
define('SECURE_AUTH_KEY', 'ak;!b$(H*CB^{OhB!J3fb,,>O>CNW(>D4a$GneG]O~G)~V,E+O1JkiaG[w{C2eh(');
define('LOGGED_IN_KEY', 'ZPk+TkzLhl50Pz|SHQ!TH>B.KJSi=ZFz_}J{n|&5@L lAF2%5+7ywt^]<}sZA>Kx');
define('NONCE_KEY', '{m_ypoE%4u>Nrw$|k6(s3?F{?3w1;URU$aV&l[.}I0q$ ABVVI4!y<~4Er&1_56w');
define('AUTH_SALT', '9>N[iPMh9oSh<0ljYzJ$j:*fdgB_x[xs+$},]gN{;TKj%(3dQCEWg.|l5Jo?sUJV');
define('SECURE_AUTH_SALT', 'h}n2rMakMEw))7RQB702]~>s,OGvamDs]9jlRmsNnRvwt#@7Ebaw&8u{Bd9[fWZi');
define('LOGGED_IN_SALT', 'G~Bu~$-wGa&Cj9y|k-(9hA x&K:z(n0&5hkV6!M5DSt#l~ )tx<~s#L{#;ZUXYo{');
define('NONCE_SALT', 'u)}cBrn&6]Ff1(rjs?(~RexZSBy[sd->2WK/KRKcdufA{y[H2y)Xm/1GW@$_U?>8');

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

