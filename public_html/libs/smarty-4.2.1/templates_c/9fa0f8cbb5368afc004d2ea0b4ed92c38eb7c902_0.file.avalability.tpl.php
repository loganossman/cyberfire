<?php
/* Smarty version 4.2.1, created on 2022-12-14 12:41:45
  from 'C:\Apache24\htdocs\cyberfire\public_html\templates\avalability.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_639a0ad94e1050_93723413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fa0f8cbb5368afc004d2ea0b4ed92c38eb7c902' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\cyberfire\\public_html\\templates\\avalability.tpl',
      1 => 1671039702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639a0ad94e1050_93723413 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aura Aquatics Scheduling</title>
    <link rel="stylesheet" href="css/bigChungus.css" />
    <link rel="stylesheet" href="js/CalanderComponent/CalanderCSS/calander.css" />
    <link rel="javascript" href="js/moment.js">
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
        <a class="cta" href="login.php"><button>Logout</button></a>
    </header>

    <div class ="contentContainer">
        <div class ="viewBLORP">
            <div class = "title">
                <h1>Please enter your Availability:</h1>
            </div>
            <div class = "avalabilityCalanderBody">
                <h3></h3> 
                   
                <div class = "calander" id="calander">
                    
                    <!--the html is auto generated here with javascript!!-->     
                </div>
            </div>
            <div class="avalability">
            
            <form action="/action_page.php" method="post">

            
                <div class = "a">
                    <h2>Location: </h2>
                    <input  class="input" type="checkbox" id="location 1" name="HRC" value="null">
                    <tag>HRC (Defualt)</tag>
                    <input class="input" type="checkbox" id="location 2" name="vehicle1" value="null">
                    <tag>Winchester</tag>
                </div>
                <div class = "a">
                    <h2>Shift: </h2>
                    <input class="input" type="checkbox" id="full" name="Full Day" value="null">
                    <tag>Full (Defualt)</tag>
                    <input class="input" type="checkbox" id="morning" name="Morning" value="null">
                    <tag>Morning</tag>
                    <input class="input" type="checkbox" id="evening" name="Evening" value="null">
                    <tag>Evening</tag>
                </div>
                <div class = "a">
                    <h2>Set this day as a weekly default: </h2>
                    <input class="input" type="checkbox" id="active" name="Active" value="null">
                    <tag>Active</tag>
                    <input class="input" type="checkbox" id="nonactive" name="Not Active(Defualt)" value="null">
                    <tag>Not Active (Defualt)</tag>
                </div>
                <button type="submit" value="submit">Submit</button>
            </form>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            
          </div>
        </div>
      </div>
    <?php echo '<script'; ?>
 src="js/moment.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/CalanderComponent/SM.js" type="module"><?php echo '</script'; ?>
>  
    <?php echo '<script'; ?>
> function show(type,date,location){
        console.log(type)
        $('#myModal').modal('show')

    }
    <?php echo '</script'; ?>
>  
</body>
</html><?php }
}
