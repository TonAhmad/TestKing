<?php

$host = 'localhost';
$port = '3306';
$dbname = 'toko';
$username = 'root';
$password = '';

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$dbname;charset=utf8", $username, $password);
    echo "Database sukses terkoneksi<br>";

    function getConnection(): PDO
    {
        $host = 'localhost';
        $port = '3306';
        $dbname = 'toko';
        $username = 'root';
        $password = '';

        return new PDO("mysql:host=$host:$port;dbname=$dbname;charset=utf8", $username, $password);
    }

    // customers
    $connection = getConnection();
    $sql = "SELECT * FROM customers";
    $result = $connection->query($sql);
    foreach ($result as $row) {
        var_dump($row);
    }
    $connection = null; 

    // admin
    $connection = getConnection();

    $username = "admin";
    $password = "admin";

    $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($row = $stmt->fetch()) {
        echo "SUKSES LOGIN<br>";
    } else {
        echo "GAGAL LOGIN<br>";
    }

    $connection = null;

    // comment
    $connection = getConnection();
    $connection->exec("INSERT INTO comments(email,comment) VALUES('elo@test.com','ah')");
    $id = $connection->lastInsertId();
    var_dump($id);
    $connection = null;

} catch (PDOException $exception) {
    echo "Error tidak bisa menyambungkan ke database: " . $exception->getMessage();
}
?>
