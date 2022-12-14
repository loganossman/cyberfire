<?php
// password: cyberFire123
try {
    $pdo = new PDO("mysql:dbname=lifeguard;host=cyberfire.cs.messiah.edu", "csadmin", "cy63rFir3");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

session_start();
?>