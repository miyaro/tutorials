<?php

define('DB_DATABASE','dotinstall_db');
define('DB_USERNAME','dbuser');
define('DB_PASSWORD','');
define('PDO_DSN','mysql:dbhost=localhost;dbname='.DB_DATABASE);

try{
    //connect
    $db = new PDO(PDO_DSN,DB_USERNAME,DB_USERNAME);
    $db->setAttribute(PDO::ATRTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $db->exec("insert into users (name,score) values ('taguchi,55')");
    echo "user added!";
    
    $db = null;

    
}catch(PDOException $e){
    echo $e->getMessage();
    exit;
}