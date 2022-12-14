<?php
/**
 * @var $smarty Smarty defined in config.php
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

    $email1 = $_SESSION["email"];


//    $workEmail = $emails[0];

    $smarty->assign("email1", $email1);
    $smarty->assign("wholeName", $wholeName);

    if (isset($_POST['cancel'])) {
        header("Location: profile.php");
        exit();
    }else if (isset($_POST['submit'])){
        $email = $_POST['email'];
        $first = $_POST['FirstName'];
        $last = $_POST['LastName'];
        $userName = $_POST['username'];
        $profile = $_POST['File'];

        if(empty($email) && empty($first) && empty($last) && empty($userName)){
            $smarty -> assign("error","empty");
        }else if (!preg_match('/^[a-zA-Z]*$/', $first) || !preg_match('/^[a-zA-Z]*$/', $last)){
            $smarty -> assign("error1","spelled incorrect");
        }else if(preg_match('/^[0-9]{10}[a-zA-Z]+$/', $userName)) {
            $smarty -> assign("error2","Invalid Username");
        }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $smarty -> assign("error3","Invalid Email");
        }else{
            $sql = "UPDATE employee SET profile_img = '$profile',email = '$email',
                    username = '$userName', first_name = '$first', last_name = '$last'
                    WHERE email = '" . $_SESSION["email"] . "' ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            header("Location: success.php");
        }
    }
$smarty-> display("editProfile.tpl");
