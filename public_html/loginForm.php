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
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) && empty($password)) {
        echo '<script>alert("Please fill out entire form")</script>';
    }
    else if (empty($email)) {
        echo '<script>alert("Please insert email")</script>';
    }
    else if (empty($password)) {
        echo '<script>alert("Please insert password")</script>';
    }

    // check if email matches an email in Employee table
    $sql = "SELECT * FROM employee WHERE email=" . $email;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // check if password matches a password in Employee table
}

$smarty-> display("EmployeeSchedule.tpl");
?>