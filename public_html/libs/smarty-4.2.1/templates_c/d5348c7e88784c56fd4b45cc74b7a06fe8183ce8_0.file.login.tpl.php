<?php
/* Smarty version 4.2.1, created on 2024-10-03 15:21:21
  from 'C:\xampp\htdocs\phpCheck\cyberfire\public_html\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_66feeeb16291e4_56759486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5348c7e88784c56fd4b45cc74b7a06fe8183ce8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phpCheck\\cyberfire\\public_html\\templates\\login.tpl',
      1 => 1724169055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66feeeb16291e4_56759486 (Smarty_Internal_Template $_smarty_tpl) {
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
                <form action="loginForm.php" method="post">
                    <div class =" txt_feild">
                        <label>Email*</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class =" txt_feild">
                        <label>Password*</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                        <?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
                            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                        <?php }?>
                    </div>
                    <div class="forgot">Admin static login <a href="houston.php" style="color: rgba(224,62,76,.69)">Click here!</a></div>
                    
                    <input class="button" type="submit" id="submit" name="submit" value="Login">
                </form>
                <div class="New">
                    <a href="employeeVerification.php" style="text-decoration: none;">New Employee <span style="color: rgba(224,62,76,.69)">Click here!</span></a>
                </div>
                <div class="New">
                    <a href="emailReEntry.php" style="text-decoration: none;">Forgot Password <span style="color: rgba(224,62,76,.69)">Click here!</span></a>
                </div>
                <div class="footer">
                    <p>If you are have trouble logging in please try resetting password. If that doesnt work please email cisdummy2022@gmail.com or contact your Manager</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
