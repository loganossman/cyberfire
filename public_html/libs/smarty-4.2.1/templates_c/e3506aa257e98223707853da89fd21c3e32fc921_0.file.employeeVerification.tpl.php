<?php
/* Smarty version 4.2.1, created on 2024-10-03 15:21:25
  from 'C:\xampp\htdocs\phpCheck\cyberfire\public_html\templates\employeeVerification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_66feeeb527bbb1_72232181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3506aa257e98223707853da89fd21c3e32fc921' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phpCheck\\cyberfire\\public_html\\templates\\employeeVerification.tpl',
      1 => 1724169055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66feeeb527bbb1_72232181 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aura Aquatics Scheduling</title>
    <link rel="stylesheet" href="css/bigChungus.css"/>
</head>
<body>     
    <div class ="contentContainerGORGON">
        <div class ="viewGORGON">
            <div class="header">
                <img class="logo" src="img/logolog.png" alt="blank" width="100%" >
            </div>
            <div class = "containerGORGON">
                <form action="empVerForm.php" method="post">
                    <div class =" txt_feild">
                        <label>First Name</label>
                        <input type="firstName" id="firstName" name="firstName" class="form-control" required>
                    </div>
                    <div class =" txt_feild">
                        <label>Last Name</label>
                        <input type="lastName" id="lastName" name="lastName" class="form-control" required>
                    </div>
                    <div class =" txt_feild">
                        <label>Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class =" txt_feild">
                        <label>Username</label>
                        <input type="username" id="username" name="username" class="form-control" required>
                    </div>
                    <div class =" txt_feild">
                        <label>Enter Verification Password</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="buttonPadding">
                        <input class="button" type="submit" id="submit" name="submit" value="Verify">
                    </div> 
                </form>
            </div>
            <div class = "footer">
                <p>
                    If you are have trouble logging in please try resetting password.
                    If that doesnt work please email cisdummy2022@gmail.com or contact your Manager
                </p>
            </div>
        </div>
            
    </div>
</body>
</html><?php }
}
