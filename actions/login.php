<?php
session_start(); 
include("../vendor/autoload.php");
use Libs\Database\MySQL;
use Libs\Database\UsersTable; 
use Helpers\Http;

$email = $_POST['email'];
$password = md5( $_POST['password'] );
$table = new UsersTable(new MySQL());
$user = $table->findByEmailAndPasword($email, $password);
if ($user) {
  // if($table->suspended($user->id)) { 
  //   Http::redirect("/index.php", "suspended=1");
      
  // }
  $_SESSION['user'] = $user;
  Http::redirect("/profile.php");
  } else {
  Http::redirect("/index.php", "incorrect=1");
 }