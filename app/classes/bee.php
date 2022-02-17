<?php 

class Bee {

  // Propiedades del framework
  private $framework = 'Bee Framework';
  private $verion = '1.0.0';
  private $uri = [];

  // La función principal que se ejecuta al instanciar nuestra clase
  function __construct() {
    $this->init();
  }

  /**
   * Método para ejecutar cada "método" de forma subsecuente
   *
   * @return void
   */
  private function init() {
    // Todos los métodos que queremos ejecutar consecutivamente
    $this->init_session();
    $this->init_load_config();
    $this->init_load_functions();
    $this->init_autoload();
    $this->init_csrf();
    $this->dispatch();
  }

  /**
   * Método para iniciar la sesión en el sistema
   * 
   * @return void
   */
  private function init_session() {
    if(session_status() == PHP_SESSION_NONE) {
      session_start();
    }

    return;
  }

  /**
   * Método para cargar la configuración del sistema
   *
   * @return void
   */ 
  private function init_load_config() {
    $file = 'bee_config.php';
    if(!is_file('app/config/'.$file)) {
      die(sprintf('El archivo %s no se encuentra, es requerido para que %s funcione.', $file, $this->framework));
    }

    // Cargando el archivo de configuración
    require_once 'app/config/'.$file;

    return;
  }

  /**
   * Método para cargar todas las funciones del sistema y del usuario
   *
   * @return void
   */
  private function init_load_functions() {
    $file = 'bee_core_functions.php';
    if(!is_file(FUNCTIONS.$file)) {
      die(sprintf('El archivo %s no se encuentra, es requerido para que %s funcione.', $file, $this->framework));
    }

    // Cargando el archivo de funciones core
    require_once 'app/functions/'.$file;
    

}