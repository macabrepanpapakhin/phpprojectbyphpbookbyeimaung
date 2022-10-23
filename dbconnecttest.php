<?php

$db=new PDO("mysql:dbhost=192.168.64.3;dbname=form",'root','',[
PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING,
PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
]);

$statement= $db->query("select * from roles");

$result = $statement->fetchAll();

print_r($result);

// $sql="insert into roles (name,value) values ('lost',5) ;";


// $db->query($sql);

// $sql ="insert into roles (name,value) values (:name,:value)";

// $statement=$db->prepare($sql);

// $statement->execute([
//   ':name' => 'afraid',
//   ":value" => 999
// ]);

//echo $statement->fetchAll();

$sql="update roles set name = :name where value=999";

$statement=$db->prepare($sql);

$statement->execute([
  ':name'=>'Superman'
]);

