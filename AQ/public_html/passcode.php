<?php
/**
 * @var $smarty
 */
if(!isset($_POST["passcodeEntry"])){

}
include "../private_html/config.php";

$smarty->display("passcode.tpl");