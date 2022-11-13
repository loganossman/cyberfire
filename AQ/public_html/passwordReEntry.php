<?php
/**
 * @var $smarty
 */
session_start();

include "../private_html/config.php";
include PRIVATE_PATH . "db.inc.php";

 if($_POST['passwordOne'] == $_POST['passwordTwo']){
   $sql = "UPDATE username FROM employee WHERE username = :username;";
   $stmt = $pdo->prepare($sql);
   $stmt->execute(['username' => $_SESSION["email"]]);
   $user = $stmt->fetch();
   $smarty->display("passwordChangeVerification.tpl");
 }
 else{
    echo "Error: Passwords do not match";
 }
