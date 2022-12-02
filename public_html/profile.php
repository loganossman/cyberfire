<?php
/**
 * @var $smarty
 */

include "../private_html/config.php";

session_start();

$_SESSION["email"];

$smarty->display("profile.tpl");

