<?php


try {
    $pdo = new PDO("mysql:dbname=lifeguard;host=cyberfire.cs.messiah.edu", "291web", "cyberFire123");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>