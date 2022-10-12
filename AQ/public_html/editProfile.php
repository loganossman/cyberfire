<?php
/*
 * @var $smarty defined in config.php
 */
include "../Private_html/config.php";

if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $first = $_POST['FirstName'];
    $last = $_POST['LastName'];
    $phone = $_POST['phoneNumber'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zipCode'];


    if(empty($email) && empty($first) && empty($last) && empty($phone) && empty($street) && empty($city)
        && empty($state) && empty($zip)){
        echo '<script>alert("Please fill out entire form")</script>';

    }else if (!preg_match('/^[a-zA-Z]*$/', $first) || !preg_match('/^[a-zA-Z]*$/', $last)){
        echo '<script>alert("Invalid name")</script>';

    }else if(preg_match('/^[0-9]{10}+$/', $phone)) {
        echo '<script>alert("Invalid phone number")</script>';

    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo '<script>alert("invalid email")</script>';

    }else if(!preg_match('/^[0-9]{5}+$/', $zip)) {
        echo '<script>alert("Invalid zip code")</script>';
    }else{
        echo '<script>alert("Update successfully submitted")</script>';
    }
}

$smarty-> display("editProfile.tpl");