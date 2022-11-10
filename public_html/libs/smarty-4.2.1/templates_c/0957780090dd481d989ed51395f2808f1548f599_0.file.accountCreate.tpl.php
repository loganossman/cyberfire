<?php
/* Smarty version 4.2.1, created on 2022-10-12 15:49:21
  from 'C:\Apache24\htdocs\public_html\templates\accountCreate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63471a41b3f8a1_13456563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0957780090dd481d989ed51395f2808f1548f599' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\public_html\\templates\\accountCreate.tpl',
      1 => 1665604007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63471a41b3f8a1_13456563 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <label>Enter Your Email:</label>
                    <input type="email" required>
                </div>
                <div class =" txt_feild">
                    <label>Choose a Password:</label>
                    <input type="password" required>
                </div>
                <div class =" txt_feild">
                    <label>Re-Enter Password:</label>
                    <input type="password" required>
                </div>
                
                <div class="buttonPadding">
                    <input class="button" onclick="window.location.href='emailVerification.php';"type="submit" value="Verify"> </input>
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
