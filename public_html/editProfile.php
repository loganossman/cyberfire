<?php
/**
 * @var $smarty Smarty defined in config.php
 * @var $pdo PDO defined in db.inc.php
 */
include "../private_html/config.php";
include PRIVATE_PATH . "db.inc.php";

    if (isset($_POST['cancel'])) {
        header("Location: profile.php");
        exit();
    }else if (isset($_POST['submit'])){
        $email = $_POST['email'];
        $first = $_POST['FirstName'];
        $last = $_POST['LastName'];
        $userName = $_POST['username'];
        $profile = $_POST['File'];
//            "<img src='C:\Users\mcgil\Pictures\profile.jpg' alt='img' />";

        if(empty($email) && empty($first) && empty($last) && empty($userName)){
            echo '<script>alert("Please fill out entire form")</script>';
        }else if (!preg_match('/^[a-zA-Z]*$/', $first) || !preg_match('/^[a-zA-Z]*$/', $last)){
            echo '<script>alert("Invalid name")</script>';
        }else if(preg_match('/^[0-9]{10}[a-zA-Z]+$/', $userName)) {
            echo '<script>alert("Invalid username")</script>';
        }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo '<script>alert("invalid email")</script>';
        }else{
            $sql = "UPDATE employee SET profile_img = '$profile',email = '$email',
                    username = '$userName', first_name = '$first', last_name = '$last'
                    WHERE password = 'abcd' ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            header("Location: success.php");
        }
    }
$smarty-> display("editProfile.tpl");
