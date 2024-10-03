<?php
/* Smarty version 4.2.1, created on 2024-10-03 15:22:39
  from 'C:\xampp\htdocs\phpCheck\cyberfire\public_html\templates\emailReEntry.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_66feeeffc02095_33875116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fd1f0245bdb2c0d45dcb7c0c875ab8aeca7bee3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phpCheck\\cyberfire\\public_html\\templates\\emailReEntry.tpl',
      1 => 1724169055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66feeeffc02095_33875116 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aura Aquatics Scheduling</title>
    <link rel="stylesheet" href="css/bigChungus.css" />
</head>
<body>     
    <div class ="contentContainerGORGON">
        <div class ="viewGORGON">
            <div class="header">
                <img class="logo" src="img/logolog.png" alt="blank" width="100%" >
            </div>
            <div class = "containerGORGON">
                <form action="loginToPasscode.php" method="post">
                    <div class =" txt_feild">
                        <label>Email*</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    
                    <input class="button" type="submit" id="submit" name="submit" value="Send Passcode">
                </form>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
