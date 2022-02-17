<?php

//saber si estamos trabajando de forma local o remota
define('IS_LOCAL', in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']));

//Define el uso horario o timezone del sistema
date_default_timezone_set('America/Mexico_City');

//Lenguaje

define('LANG', 'es');

//Ruta Base de nuestro proyecto
define('BASEPATH', IS_LOCAL ? '/beeFramework/' : '__EL BASEPATH EN PRODUCCION__');

//Sal del sistema
define('AUTHSALT', 'BeeFramework<3');

//Puerto y la URL del sitio
define('PORT', '8848');
define('URL', IS_LOCAL ? 'http://127.0.0.1:' . PORT . '/beeFramework/' : '__URL EN PRODUCCION__');

//Las rutas de directorios y archivos
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', getcwd() . DS);

define('APP', ROOT . 'app' . DS);
define('CLASSES', APP . 'classes' . DS);
define('CONTROLLER', APP . 'controllers' . DS);
define('FUNCTIONS', APP . 'functions' . DS);
define('CONFIG', APP . 'config' . DS);
define('MODELS', APP . 'models' . DS);

define('TEMPLATES', ROOT . 'templates' . DS);
define('INCLUDES', TEMPLATES.'includes'.DS);
define('MODULES', TEMPLATES.'modules'.DS);
define('VIEWS', TEMPLATES.'views'.DS);

// Rutas de archivos o assets con base url

define('ASSETS', URL.'assets/');
define('CSS', ASSETS.'css/');
define('FAVICON', ASSETS.'favicon/');
define('FONTS', ASSETS.'fonts/');
define('IMAGES', ASSETS.'images/');
define('JS', ASSETS.'js/');
define('PLUGINS', ASSETS.'plugins/');
define('UPLOADS', ASSETS.'uploads/');

//Credenciales de la base de datos
//Set para conexionlocal o de desarrollo
define('LDB_ENGINE', 'mysql');
define('LDB_HOST', 'localhost');
define('LDB_NAME', 'u4_pl_db');
define('LDB_USER', 'root');
define('LDB_PASS', '');
define('LDB_CHARSET', 'utf8');

//Set para conexion en produccion o servidor real
define('DB_ENGINE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', '___REMOTE DB___');
define('DB_USER', '___REMOTE DB___');
define('DB_PASS', '___REMOTE DB___');
define('DB_CHARSET', '___REMOTE CHARSET___');
