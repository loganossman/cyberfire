<?php
try {
    $pdo = new PDO("mysql:dbname=lifeguard;host=localhost", "USERNAME", "PASSWORD");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>