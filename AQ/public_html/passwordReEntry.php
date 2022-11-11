<?php
/**
 * @var $smarty
 */

include "../private_html/config.php";

 if($_POST['passwordOne'] == $_POST['passwordTwo']){
    $smarty->display("passwordChangeVerification.tpl");
 }
 else{
    echo "Error: Passwords do not match";
 }
