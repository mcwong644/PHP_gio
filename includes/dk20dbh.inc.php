<?php

$dsn="mysql:host=localhost; dbname=wongdb";
$dbusername="root";
$dbpwd=""; // on mac, may need to be root

// 3 method to connect - mysql, mysqli, and pdo (php data objects)
try {
    $pdo = new PDO($dsn,$dbusername,$dbpwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed" . $e->getMessage();
}
