<?php 
include("../vendor/autoload.php");
use Libs\Database\MySQL;
use Libs\Database\UsersTable; 
use Helpers\Http;
use Helpers\Auth;
$auth = Auth::check();
$table = new UsersTable(new MySQL());
$id = $_GET['id']; 
$table->delete($id);
Http::redirect("/admin.php");