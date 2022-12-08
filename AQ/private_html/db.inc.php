<?php
try {
    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=lifeguard", "291web", "]YRoJB4k0WJlzI9h");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>