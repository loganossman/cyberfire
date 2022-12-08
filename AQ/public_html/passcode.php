<?php
/**
 * @var $smarty
 */

include "../private_html/config.php";
include PRIVATE_PATH . "db.inc.php";

if(!isset($_POST["passcodeEntry"])){
    mail("loganossman@gmail.com", "Your Reset Passcode", "Your passcode is 185769");
    mail("lo2196@messiah.edu", "Your Reset Passcode", "Your passcode is 185769");
    $smarty->display("passcode.tpl");
    mail("loganossman@gmail.com", "Your Reset Passcode", "Your passcode is 185769");
    mail("lo2196@messiah.edu", "Your Reset Passcode", "Your passcode is 185769");
    
}
elseif($_POST["passcodeEntry"] == "185769"){
    $smarty->display("passwordReEntry.tpl");
}
else{
    echo "this is not the code";
}
