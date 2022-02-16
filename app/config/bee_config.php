<?php

//saber si estamos trabajando de forma local o remota
define('IS_LOCAL', in_array($_SERVER['REMOTE_ADD'],['127.0.0.1', '::1']));

//Define el uso horario o timezone del sistema
date_default_timezone_set('America/Mexico_City');

//Lenguaje

define('LANG', 'es');

//Ruta Base de nuestro proyecto
define('BASEPATH', IS_LOCAL ?'/beeFramework/' : '__EL BASEPATH EN PRODUCCION__');

//Sal del sistema
define('AUTHSALT', 'BeeFramework<3');

//Puerto y la URL del sitio
define('PORT', '8848');
define('URL', IS_LOCAL ? 'http://127.0.0.1:' .PORT.'/beeFramework/' : '__URL EN PRODUCCION__');

//Las rutas de directorios y archivos
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', getcwd().DS);

define('APP', ROOT. 'app'.DS);
define('CLASSES', APP.'classes'.DS);
define('CONTROLLER', APP.'controllers'.DS);
define('FUNCTIONS', APP.'functions'.DS);
define('CONFIG', APP.'config'.DS);
define('MODELS', APP.'models'.DS);

define('TEMPLATES', ROOT.'templates'.DS);

