<?php
namespace Libs\Database;

use PDO;
use PDOException;

class MySQL{
  private $dbhost;
  private $dbname;
  private $dbuser;
  private $dbpass;
  
  private $db;
  public function __construct(
  $dbhost="192.168.64.3",
  $dbuser="root",
  $dbname="form",
  $dbpass="",)
  {
    $this->dbhost = $dbhost;
    $this->dbname = $dbname;
    $this->dbpass = $dbpass; 
    $this->dbuser= $dbuser;
    $this->db = null;
  }

  public function connect(){
    try{
      $this->db=new PDO("mysql:dbhost=192.168.64.3;dbname=form",'root','',[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
        ]);
      return $this->db;
    }catch(PDOException $e){
    
      echo $e->getMessage();
    }
   
  }
   
}