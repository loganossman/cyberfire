<?php
/* Smarty version 4.2.1, created on 2022-12-14 11:59:46
  from 'C:\Apache24\htdocs\cyberfire\public_html\templates\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_639a0102d84a85_53691502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9df3e7d4e5e1e154f356cd8f74c228362aa4fb6' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\cyberfire\\public_html\\templates\\profile.tpl',
      1 => 1671037179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639a0102d84a85_53691502 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aura Aquatics Scheduling</title>
    <link rel="stylesheet" href="css/bigChungus.css" />
</head>
<body>
    <header>
        <img class="logo" src="img/logo.png" alt="blank" width="8%" height="8%"/>
        <nav>
            <ul class="nav__links">
                <li><a href="EmployeeSchedule.php">Schedule</a></li>
                <li><a href="avalability.php">Availability</a></li>
                <li><a href="ContactManager.php">Contact Manager</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </nav>
        <button><a class="cta" href="../Login/login.php">Login</a></button>
    </header>

    <div class ="contentContainer">
        <div class ="viewBLORP">
            <div class = "title">
                <h1>Profile</h1>
            </div>
            <!-- based on stuff from here: https://www.w3schools.com/howto/howto_css_profile_card.asp -->
            <div class="profile" style="max-width: 400px;">
                <div style="float:left; margin-right: 20px;">
                <img src="img/pfp.png">
                <h1><?php echo $_smarty_tpl->tpl_vars['wholeName']->value;?>
</h1>
                </div>
                <div style="float:right;">
                <p><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</p>
                <button style="background-color: #E03E4C; margin: 10px"><a class="cta" href="editProfile.php" style="color: black">Edit</a></button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- <?php echo '<script'; ?>
 src="../../js/moment.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../js/SM.js" type="module"><?php echo '</script'; ?>
>  
    <?php echo '<script'; ?>
> function show(type,date,location){
        console.log(type)
        $('#myModal').modal('show')

    }
    <?php echo '</script'; ?>
>   -->
</body>
</html><?php }
}
