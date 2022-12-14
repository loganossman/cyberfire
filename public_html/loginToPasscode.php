<?php
/**
 * @var $smarty
 */
include "../private_html/config.php";
include PRIVATE_PATH . "db.inc.php";

$sql = "SELECT email FROM employee WHERE email = :email;";
$stmt = $pdo->prepare($sql);
$stmt->execute(['email' => $_POST["email"]]);
$user = $stmt->fetch();
if($user){
    $_SESSION["passcode"] = rand(100000, 999999);
    echo($_SESSION["passcode"]);
    mail("loganossman@gmail.com", "Basic Subject", "Your passcode is X");
    $_SESSION["username"] = $_POST["email"];
    $smarty->display("passcode.tpl");
}
else{
    echo '<script>alert("Please enter a valid email before continuing.")</script>';
}