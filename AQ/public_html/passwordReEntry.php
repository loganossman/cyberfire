<?php
/**
 * @var $smarty
 */
session_start();

include "../private_html/config.php";
include PRIVATE_PATH . "db.inc.php";

 if($_POST['passwordOne'] == $_POST['passwordTwo']){
   $sql = "UPDATE password FROM employee WHERE email = :email;";
   $stmt = $pdo->prepare($sql);
   $stmt->execute(['email' => $_SESSION["email"]]);
   $user = $stmt->fetch();
   $smarty->display("passwordChangeVerification.tpl");
 }
 else{
    echo "Error: Passwords do not match";
 }
