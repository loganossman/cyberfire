<?php
/* Smarty version 4.2.1, created on 2022-10-12 20:50:42
  from 'C:\Apache24\htdocs\public_html\templates\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634760e289c1c0_78167206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df183993de472865813ba495f3a2c6c16d43912c' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\public_html\\templates\\profile.tpl',
      1 => 1665622233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634760e289c1c0_78167206 (Smarty_Internal_Template $_smarty_tpl) {
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
            <div class="profile">
                <div style="float:left;">
                <img src="img/pfp.png">
                <h1>Hee Hoo</h1>
                </div>
                <div>
                <p>DoB: 4/20/1969</p>
                <p>123 Stinky Street</p>
                <p>1-800-420-6969</p>
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
