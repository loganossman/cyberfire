<?php
/* Smarty version 4.2.1, created on 2022-11-17 17:22:39
  from 'C:\Apache24\htdocs\cyberfire\public_html\templates\EmployeeSchedule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6376b42f61b596_87015073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e818446e3c955a60287ef1a224e3ca2c2a963e67' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\cyberfire\\public_html\\templates\\EmployeeSchedule.tpl',
      1 => 1668720765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6376b42f61b596_87015073 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aura Aquatics Scheduling</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="js/CalanderComponent/CalanderCSS/calander.css" /> 
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

                
<!--            <li><a href="??????.php">????</a></li>-->
        </ul>
    </nav>
    <a class="cta" href="login.php"><button>Logout</button></a>
</header>

<div class ="contentContainer">
    <div class ="view">
        <div class ="viewES">
            <div class = "calanderBody">
                <h3></h3>    
                <div class = "calander" id="calander">
                    <!--the html is auto generated here with javascript!!-->     
                </div>
            </div>
    
            <aside class = "aside">
                <div>Today:</div>
                <div>Westside: 10am-8pm</div>
                <div>Tomorrow:</div>
                <div>Westside: 10am-8pm</div>
                <div>May 8, 2022:</div>
                <div>HRC: 10am-8pm</div>
                <div>May 9, 2022:</div>
                <div>HRC: 10am-8pm</div>
                <div>May 10, 2022:</div>
                <div>Westside: 10am-8pm</div>
                <div>May 11, 2022:</div>
                <div>Westside: 10am-8pm</div>
            </aside>
        </div>
        
    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div id="contain" class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<?php echo '<script'; ?>
 src="js/moment.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/CalanderComponent/EV.js" type="module"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
> 
    function show(type,id,data,globalid){
        $('#myModal').modal('show')
        var h5 = document.querySelector(".modal-header h5");
       h5.innerHTML = id;
       var element = document.createElement("div");
        element.className = "viewOfContain";
        element.appendChild(document.createTextNode(data));
        document.getElementById("contain").appendChild(element);
    
}
<?php echo '</script'; ?>
> 
</body>
</html><?php }
}
