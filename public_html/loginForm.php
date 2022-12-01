<?php
/**
 * @var $smarty Smarty defined in private_html/config.inc.php
 * @var $pdo PDO defined in db.inc.php
 */
include "../private_html/config.php";
include PRIVATE_PATH . "db.inc.php";

session_start();

// mr.ianpadilla@gmail.com
// 1234
// CyFiRemote

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION["email"] = $email;

    // check if email matches an email in Employee table
    $sql = "SELECT * FROM employee WHERE email='" . $email . "'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $user = $stmt->fetch();
    // check if password matches a password in Employee table
    $sql2 = "SELECT * FROM employee WHERE password = '" . $password . "'";
    $stmt2 = $pdo->prepare($sql2);
    $stmt2->execute();
    $pass = $stmt2->fetch();
    
    if ($pass and $user) {
        $smarty->display("EmployeeSchedule.tpl");
    } else {
        echo '<script>alert("Incorrect email or password")</script>';
        $smarty->display("login.tpl");
    }
}
?>