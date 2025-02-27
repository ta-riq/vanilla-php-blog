<?php
require "functions.php";




$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";


$pdo = new PDO($dsn);


$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);


require "routes.php";