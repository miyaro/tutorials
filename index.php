<?php

define('DB_DATABASE', 'dotinstall_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'g6fd7Xx');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname='. DB_DATABASE);


try{
    //conect
    $db = new PDO(PDO_DSN,DB_USERNAME,DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //insert
    // $stmt = $db->prepare("insert into users (name,score) value(?,?)");
    // $stmt->execute(['taguchi',44]);
    $stmt = $db->prepare("insert into users (name,score) value(:name,:score)");
    $stmt->execute([':name'=>'fkoji', ':score'=>80]);
    echo"inserted:" . $db->lastInsertId();
        
}catch(PDOException $e){
    echo $e->getMessage();
    exit;
}


?>