<?php
/**
 * @var $smarty
 */
session_start();

include "../private_html/config.php";
include PRIVATE_PATH . "db.inc.php";

if(!isset($_POST["passcodeEntry"])){
    $_SESSION["passcode"] = rand(100000, 999999);
    echo($_SESSION["passcode"]);
    mail($_SESSION["username"], "Your Reset Passcode", "Your passcode is 185769");
    $smarty->display("passcode.tpl");
    echo($_SESSION["passcode"]);
}
elseif($_POST["passcodeEntry"] == strval($SESSION["passcode"])){
    $smarty->display("passwordReEntry.tpl");
}
else{
    echo "this is not the code";
}
