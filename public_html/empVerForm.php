<?php
/**
 * @var $smarty Smarty defined in private_html/config.inc.php
 * @var $pdo PDO defined in db.inc.php
 */
include "../private_html/config.php";
include PRIVATE_PATH . "db.inc.php";
// https://stackoverflow.com/questions/22045788/check-if-email-exists-in-mysql-database
// https://phpdelusions.net/pdo_examples/check_email_exists
// mr.ianpadilla@gmail.com
// 1234

if (isset($_POST['submit'])) {
    $FName = $_POST['firstName'];
    $LName = $_POST['lastName'];
    $DOB = $_POST['DOB'];
    $password = $_POST['password'];

    // check if email matches an email in Employee table
    $sql = "INSERT INTO employee (profile_img, email, password, username, first_name, last_name, pay_rate)
    VALUES (NULL, 'email', '" . $password . "', 'username', '" . $FName . "', '" . $LName . "', 0.00)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
}

$smarty->display("accountCreated.tpl");
?>
