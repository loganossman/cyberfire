<?php
/**
 * @var $smarty
 */

include "../private_html/config.php";

 if(!isset($_POST['passwordOne'])){
    $smarty->display("passwordReEntry.tpl");
 }
 elseif($_POST['passwordOne'] == $_POST['passwordTwo']){
    $smarty->display("passwordChangeVerification.tpl");
 }