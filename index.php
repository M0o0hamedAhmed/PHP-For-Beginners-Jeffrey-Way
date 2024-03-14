<?php
$title = "Title";
require 'function.php';
require 'router.php';

$dsn = "mysql:host=localhost;user=root;dbname=store;charset=utf8mb4";

$pdo = new PDO($dsn);

 $statement = $pdo->prepare('select * from categories where id = 1');
 $statement->execute();

 $category = $statement->fetch(PDO::FETCH_ASSOC);


    echo "<li>{$category['name']} </li>";


?>