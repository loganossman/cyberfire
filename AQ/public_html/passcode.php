<?php
/**
 * @var $smarty
 */
include "../private_html/config.php";
if(!isset($_POST["passcodeEntry"])){
    mail("loganossman@gmail.com", "Egg", "Your passcode is 185769");
    $smarty->display("passcode.tpl");
}
elseif($_POST["passcodeEntry" == "185769"]){
    $smarty->display("passwordReEntry.php");
}
else{
    echo "this is not the code";
}
