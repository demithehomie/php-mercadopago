<?php

 class DB{

   private $host;
   private $user;
   private $senha;
   private $bd;

   public $pdo;

   private static $instance = null;
   
    private function __construct(){

      $this->host   = '144.202.47.232';
      $this->user   = 'root';
      $this->senha  = '3f5d8c4b-7d8e-4a0e-9b6c-1f5d2a3f6b7c';
      $this->bd     = 'guerra_done';

      $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->bd", $this->user, $this->senha, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8MB4"));

  }

  public static function getInstance(){
      if (self::$instance === null) {
          self::$instance = new self();
      }
      return self::$instance->pdo;
  }

 }

 ?>
