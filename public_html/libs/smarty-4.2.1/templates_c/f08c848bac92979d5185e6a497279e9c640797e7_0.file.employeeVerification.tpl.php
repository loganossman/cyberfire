<?php
/* Smarty version 4.2.1, created on 2022-11-22 10:58:27
  from 'C:\Apache24\htdocs\cyberfire\public_html\templates\employeeVerification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637cf1a38dea04_69302308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f08c848bac92979d5185e6a497279e9c640797e7' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\cyberfire\\public_html\\templates\\employeeVerification.tpl',
      1 => 1669131466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637cf1a38dea04_69302308 (Smarty_Internal_Template $_smarty_tpl) {
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
                <div class =" txt_feild">
                    <label>First Name</label>
                    <input type="firstName" required>
                </div>
                <div class =" txt_feild">
                    <label>Last Name</label>
                    <input type="lastName" required>
                </div>
                <div class =" txt_feild">
                    <label>Date of Birth</label>
                    <input type="DOB" required>
                </div>
                <div class =" txt_feild">
                    <label>Enter Verification Password</label>
                    <input type="password" required>
                </div>
                <div class="buttonPadding">
                    <input class="button" onclick="window.location.href='accountCreate.php';" type="submit" value="Verify"> </input>
                </div> 
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
