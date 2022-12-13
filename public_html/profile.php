<?php
/**
 * @var $smarty
 * @var $pdo PDO defined in db.inc.php
 */

include "../private_html/config.php";
include PRIVATE_PATH . "db.inc.php";

$sql = "SELECT first_name FROM employee WHERE email='" . $_SESSION["email"] . "'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$firstName = $stmt->fetch();

$sql2 = "SELECT last_name FROM employee WHERE email='" . $_SESSION["email"] . "'";
$stmt2 = $pdo->prepare($sql2);
$stmt2->execute();
$lastName = $stmt2->fetch();

$wholeName = $firstName[0] . " " . $lastName[0];

$smarty->assign("wholeName", $wholeName);
$smarty->display("profile.tpl");

?>

