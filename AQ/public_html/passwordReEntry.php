<?php
/**
 * @var $smarty
 */
session_start();

include "../private_html/config.php";
include PRIVATE_PATH . "db.inc.php";

 if($_POST['passwordOne'] == $_POST['passwordTwo']){
   $sql = "UPDATE employee SET password= " . $_POST['passwordOne'] . " WHERE email = :email;";
   $arguments = ['email'];
   $arguments['email'] = $_SESSION['username'];
   $stmt = $pdo->prepare($sql);
   $stmt->execute($arguments);
   $user = $stmt->fetch();
   echo($sql);
   $smarty->display("passwordChangeVerification.tpl");
   echo($sql);
 }
 else{
    echo "Error: Passwords do not match";
 }
