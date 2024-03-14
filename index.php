<?php
$title = "Title";
require 'function.php';
require 'router.php';

$dsn = "mysql:host=localhost;user=root;dbname=store;charset=utf8mb4";

$pdo = new PDO($dsn);

 $statement = $pdo->prepare('select * from categories');
 $statement->execute();

 $categories = $statement->fetchAll(PDO::FETCH_ASSOC);


 foreach ($categories as $category) {
    echo "<li>{$category['name']} </li>";
 }


?>