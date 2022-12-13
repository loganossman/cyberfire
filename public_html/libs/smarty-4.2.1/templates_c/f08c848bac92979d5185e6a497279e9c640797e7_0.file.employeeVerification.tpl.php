<?php
/* Smarty version 4.2.1, created on 2022-12-13 17:57:14
  from 'C:\Apache24\htdocs\cyberfire\public_html\templates\employeeVerification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6399034a6fdeb2_17783984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f08c848bac92979d5185e6a497279e9c640797e7' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\cyberfire\\public_html\\templates\\employeeVerification.tpl',
      1 => 1669925432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6399034a6fdeb2_17783984 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <label>Date of Birth</label>
                        <input type="date" id="DOB" name="DOB" class="form-control" required>
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
