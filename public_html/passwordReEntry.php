<?php
/**
 * @var $smarty
 */


include "../private_html/config.php";
include PRIVATE_PATH . "db.inc.php";

 if($_POST['passwordOne'] == $_POST['passwordTwo']){
   $hashVal = hash("md5", $POST['passwordOne'], false);
   $sql = "UPDATE employee SET password= '" . $hashVal . "' WHERE email = :email;";
   $stmt = $pdo->prepare($sql);
   $stmt->execute(['email' => $_SESSION['username']]);
   $user = $stmt->fetch();
   $smarty->display("passwordChangeVerification.tpl");
 }
 else{
    echo "Error: Passwords do not match";
 }
