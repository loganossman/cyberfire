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

$sql3 = "SELECT email FROM employee WHERE email='" . $_SESSION["email"] . "'";
$stmt3 = $pdo->prepare($sql3);
$stmt3->execute();
$email = $stmt3->fetch();
$workEmail = $email[0];

$sql4 = "SELECT username FROM employee WHERE email='" . $_SESSION["email"] . "'";
$stmt4 = $pdo->prepare($sql4);
$stmt4->execute();
$user = $stmt4->fetch();
$username = $user[0];

$smarty->assign("username", $username);
$smarty->assign("email",$workEmail);
$smarty->assign("wholeName", $wholeName);
$smarty->display("profile.tpl");

?>

