<?php
/**
 * @var $smarty
 */
session_start();
include "../private_html/config.php";
include PRIVATE_PATH . "db.inc.php";

$sql = "SELECT email FROM employee WHERE email = :email;";
$stmt = $pdo->prepare($sql);
$stmt->execute(['email' => $_POST["email"]]);
$user = $stmt->fetch();
if($user){
    $_SESSION["username"] = $_POST["email"];
    echo($user);
    $smarty->display("passcode.tpl");
    echo($user);
}
else{
    echo '<script>alert("Please enter a valid email before continuing.")</script>';
}