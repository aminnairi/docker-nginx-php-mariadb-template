<?php

$databaseName = $_ENV["DATABASE_NAME"];
$databaseUser = $_ENV["DATABASE_USER"];
$databasePassword = $_ENV["DATABASE_PASSWORD"];

$database = new PDO("mysql:host=mariadb;dbname=$databaseName", $databaseUser, $databasePassword);

$query = $database->query("SELECT 1 + 1");

$result = $query->fetch();

var_dump($result);
