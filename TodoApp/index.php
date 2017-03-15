<?php

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/functions.php');
require_once(__DIR__ . '/Todo.php');

//get todos

$todoApp = new \MyApp\Todo();
$todo = $todoApp->getAll();


var_dump($todos);
exit;
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset = "utf-8">
    <title>My Todo</title>
    <link rel = "stylesheet" href="styles.css">
</head>
<body>
    <h1>Todos</h1>
    <form action="">
        <input type="text" placeholder="what needs to be done?" id = "new_todo">
    </form>
    <ul>
        <li>
            <input type ="checkbox" >
            <span>Do something</span>
        </li>
        <div class = "delete_todo">x</div>
        <li>
            <input type ="checkbox" checked>
            <span class="done">Do something</span>
        </li>
        <div class = "delete_todo">x</div>
    </ul>
</body>
</html>