<?php
require "functions.php";
require "Database.php";

$db = new Database();

$posts = $db->query("SELECT * FROM posts")->fetchAll();

require "routes.php";