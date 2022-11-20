<?php
/**
 * @var $smarty
 */
session_start();

include "../private_html/config.php";
include PRIVATE_PATH . "db.inc.php";

 if($_POST['passwordOne'] == $_POST['passwordTwo']){
   $sql = "UPDATE employee SET password= :password WHERE email = :email;";
   $arguments = ['password'];
   $arguments['password'] = $_POST['passwordOne'];
   $arguments = ['email'];
   $arguments['email'] = $_SESSION['username'];
   $stmt = $pdo->prepare($sql);
   $stmt->execute($arguments);
   $user = $stmt->fetch();
   $smarty->display("passwordChangeVerification.tpl");
   echo($user);
 }
 else{
    echo "Error: Passwords do not match";
 }
