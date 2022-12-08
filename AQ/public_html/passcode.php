<?php
/**
 * @var $smarty
 */

include "../private_html/config.php";
include PRIVATE_PATH . "db.inc.php";

if(!isset($_POST["passcodeEntry"])){
    $retval = mail("loganossman@gmail.com", "Egg", "Your passcode is 185769", "My Header");
    echo($retval);
    echo($retval);
    $smarty->display("passcode.tpl");
    echo($retval);
    echo($retval);
    echo("pie");
}
elseif($_POST["passcodeEntry"] == "185769"){
    $smarty->display("passwordReEntry.tpl");
}
else{
    echo "this is not the code";
}
