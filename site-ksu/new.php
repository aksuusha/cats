<?php
 try {
    // подключаемся к серверу
    $conn = new PDO("mysql:host=localhost", "root", "mypassword");
     
    // SQL-выражение для создания базы данных
    $sql = "CREATE DATABASE testdb1";
    // выполняем SQL-выражение
    $conn->exec($sql);
    echo "Database has been created";
}
catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}

try {
    // подключаемся к серверу
    $conn = new PDO("mysql:host=localhost;dbname=testdb1", "root", "mypassword");
     
    // SQL-выражение для создания таблицы
    $sql = "CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);";
    // выполняем SQL-выражение
    $conn->exec($sql);
    echo "Table Users has been created";
}
catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>

