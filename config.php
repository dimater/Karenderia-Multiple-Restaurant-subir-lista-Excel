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
define( 'DB_NAME', 'cla63178_lapreviadelivery' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'cla63178_lapreviadelivery' );

/** Tu contraseña de MySQL */
define( 'DB_PASS', 'unodostres1990' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', '190.107.177.241' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );


/** Codigo del local en karenderia. */
define( 'merchant_id', '1' );
