<?php

interface enviroments
{
  public function __get($get);
}
class connect extends credentials implements enviroments
{
  public $conn;
  public function __construct(private $driver = "mysql", private $port = 3306)
  {
    try {
        $this->conn = new PDO($this->driver . ":host=" . $this->__get('host') . ";port=" . $this->port . ";bdnombre=" . $this->__get('bdnombre') . ";user=" . $this->username . ";password=" . $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (\PDOException $error) {
        echo "Sin conexión: " . $error->getMessage();
    }
  }
}

?>