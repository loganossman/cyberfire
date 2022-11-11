<?php
try {
    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=lifeguard", "root", "10seconds@Maomi");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>