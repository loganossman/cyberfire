<?php
/* Smarty version 4.2.1, created on 2022-11-19 14:05:18
  from 'C:\Apache24\htdocs\cyberfire\public_html\templates\ContactManager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637928eec89a51_79876344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb63b5839cedd5a384cf68507ac548a8b529e581' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\cyberfire\\public_html\\templates\\ContactManager.tpl',
      1 => 1668720765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637928eec89a51_79876344 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aura Aquatics Scheduling</title>
    
    <link rel="stylesheet" href="css/bigChungus.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <header>
        <img class="logo" src="img/logo.png" alt="blank" width="8%" height="8%"/>
        <nav>
            <ul class="nav__linksASDF">
                <li><a href="EmployeeSchedule.php">Schedule</a></li>
                <li><a href="avalability.php">Availability</a></li>
                <li><a href="ContactManager.php">Contact Manager</a></li>
                <li><a href="profile.php">Profile</a></li>

            </ul>
        </nav>
        <a class="cta" href="login.php"><button>Logout</button></a>
    </header>

    <div class ="contentContainerASDF">
        <div class ="viewASDF">
            <p style="font-size:36px; font-style: normal; height:20%; padding: 1% 0% 0% 2%">Messages</p>
            <div style="height: 80%">
                <!--Inline style used to override row gutter-->
                <div class="paddingMeBoyMeBob">
                    <button class="row messageCont d-flex align-items-center" style="--bs-gutter-x: 0">
                        <div class="col-2 d-flex align-items-center"><img src="img/circle-32.png" alt="gray circle" class="profileImg"></img>Mo(Owner)</div>
                        <div class="col-6"><p class="message"><img src="img/greenCircle-16.png" alt="green circle" class="profileImg">(Mo):Hey we need some to work thursday due to a joe dropping a shift can...</p></div>
                        <div class="col-2"><p style="float:right">9:32 am</p></div>
                        <div class="col-2"><p style="float:left; padding-left: 15px">Today</p></div>
                    </button>
                </div>
                <div class="paddingMeBoyMeBob middleMessage">
                    <button class="messageCont row d-flex align-items-center" style="--bs-gutter-x: 0">
                        <div class="col-2 d-flex align-items-center"><img src="img/circle-32.png" alt="gray circle" class="profileImg"></img>Mahar(Owner)</div>
                        <div class="col-6"><p class="message"><img src="img/circle-16.png" alt="gray circle" class="profileImg">(Mahar):Paycheck are going to be ready this Friday...</p></div>
                        <div class="col-2"><p style="float:right">6:32 pm</p></div>
                        <div class="col-2"><p style="float:left; padding-left: 15px">Yesterday</p></div>
                    </button>
                </div>
                <div class="paddingMeBoyMeBob">
                    <button class="messageCont row d-flex align-items-center" style="--bs-gutter-x: 0">
                        <div class="col-2 d-flex align-items-center"><img src="img/circle-32.png" alt="gray circle" class="profileImg"></img>Sabine(Owner)</div>
                        <div class="col-6"><p class="message"><img src="img/circle-16.png" alt="gray circle" class="profileImg">(You):Hey Im going to be running late today should be there by 10:05 due to traffic...</p></div>
                        <div class="col-2"><p style="float:right">9:50 am</p></div>
                        <div class="col-2"><p style="float:left; padding-left: 15px">May 2, 2022</p></div>
                    </button>
                </div>
            </div>

        </div>
    </div>
</body>
</html><?php }
}
