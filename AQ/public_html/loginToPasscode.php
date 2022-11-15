<?php
/**
 * @var $smarty
 */
session_start();
include "../private_html/config.php";
include PRIVATE_PATH . "db.inc.php";

$sql = "SELECT username FROM employee WHERE username = :username;";
$stmt = $pdo->prepare($sql);
$stmt->execute(['username' => $_POST["email"]]);
$user = $stmt->fetch();
if($_POST["email"] == $user['username']){
    $_SESSION["username"] = $_POST["email"];
    $smarty->display("passcode.tpl");
}
else{
    echo '<script>alert("Please enter a valid email before continuing.")</script>';
}