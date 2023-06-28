<?php

trait getInstance
{
  public static $instance;
  public static function getInstance()
  {
    $arg = func_get_args();
    $arg = array_pop($arg);
    return (!(self::$instance instanceof self) || !empty($arg)) ? self::$instance = new static(...(array) $arg) : self::$instance;
  }
  function __set($name, $value)
  {
    $this->$name = $value;
  }
}

function autoload($class)
{

  $directories = [
    dirname(__DIR__) . '/scripts/dataBases/',
    dirname(__DIR__) . '/scripts/camper/'
  ];
  
  $classFile = str_replace('\\', '/', $class) . '.php';

 
  foreach ($directories as $directory) {
    $file = $directory . $classFile;
    
    if (file_exists($file)) {
      require $file;
      return;
    }
  }
}

spl_autoload_register('autoload');

?>