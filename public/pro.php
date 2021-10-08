<?php

$pdo = new PDO("mysql:host=mysql;dbname=get_fort","root","root");
$sql = "SELECT * FROM nevatrip";
$statement = $pdo->prepare($sql);
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($users);