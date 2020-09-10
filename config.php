<?php
/**
* Configuración básica de host.
* domain: bloguero-ec.com
* author: bloguero-ec
*/

// validamos el request para el login del sitio.
if (!isset($_SESSION)) {
session_name('demo_sesion_google');
session_start();
}

//configuramos timezone vease http://php.net/manual/en/timezones.php
date_default_timezone_set('America/Bogota');

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos */
define( 'DB_NAME', 'forsecontrol' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'guardias' );

/** Tu contraseña de MySQL */
define( 'DB_PASS', '8g,V7m4&fd9g' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', '107.180.41.89' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );
