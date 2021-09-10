<?php
try {
$pdo = new PDO("mysql:host=mysql;dbname=get_fort","root","root");
echo "Database connection established";
$sql = "SELECT * FROM users";
$statement = $pdo->prepare($sql);
$statement->execute();
var_dump($statement->fetchAll(PDO::FETCH_ASSOC));
}
catch (PDOException $e) {
    print "<pre>";
    var_dump($e);
    print "</pre>";
}


$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=mysql;dbname=get_fort";
try {
    $pdo = new PDO($dsn, "root", "root", $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
    $sql = "SELECT * FROM users";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);