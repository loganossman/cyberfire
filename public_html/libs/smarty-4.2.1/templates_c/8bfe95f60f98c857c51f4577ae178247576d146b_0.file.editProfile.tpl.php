<?php
/* Smarty version 4.2.1, created on 2022-12-08 11:06:19
  from 'C:\Apache24\htdocs\cyberfire\public_html\templates\editProfile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63920b7b4243c3_63400912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bfe95f60f98c857c51f4577ae178247576d146b' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\cyberfire\\public_html\\templates\\editProfile.tpl',
      1 => 1670514705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63920b7b4243c3_63400912 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css\bigChungus.css"/>
</head>
<body class ="body1">
<?php echo '<script'; ?>
>
  var loadFile = function (event) {
    var image = document.getElementById("picture");
    image.src = URL.createObjectURL(event.target.files[0]);
  };
<?php echo '</script'; ?>
>
  <div class="container">
    <div class="row gutters">
      <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <form action="editProfile.php" method="post">
          <div class="card">
              <div class="account-settings">
                <div class="user-profile">
                  <div class="user-avatar">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" id="picture">
                    <input type="file" class="form-control" id="form" accept="image/*" name="File"
                           onchange="loadFile(event)">
                  </div>
                  <h5 class="user-name">Yuki Hayashi</h5>
                  <h6 class="user-email">yuki@Maxwell.com</h6>
                </div>
              </div>
          </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card">
              <div class="card-body">
                <div class="row gutters">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h6 class="mb-2 text-primary">Personal Details</h6>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                      <label for="firstName">First Name</label>
                      <input type="text" class="form-control" id="firstName" placeholder="Enter first name" name="FirstName">
                      <?php if (((isset($_smarty_tpl->tpl_vars['error']->value)))) {?>
                        <div class = "alert alert-danger">
                          <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                        </div>
                      <?php }?>
                      <?php if (((isset($_smarty_tpl->tpl_vars['error1']->value)))) {?>
                        <div class = "alert alert-danger">
                          <?php echo $_smarty_tpl->tpl_vars['error1']->value;?>

                        </div>
                      <?php }?>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                      <label for="lastName">Last Name</label>
                      <input type="text" class="form-control" id="lastName" placeholder="Enter last name" name="LastName">
                      <?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
                        <div class = "alert alert-danger">
                          <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                        </div>
                      <?php }?>
                      <?php if (((isset($_smarty_tpl->tpl_vars['error1']->value)))) {?>
                        <div class = "alert alert-danger">
                          <?php echo $_smarty_tpl->tpl_vars['error1']->value;?>

                        </div>
                      <?php }?>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                      <label for="eMail">Email</label>
                      <input type="email" class="form-control" id="eMail" placeholder="Enter email ID" name="email">
                      <?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
                        <div class = "alert alert-danger">
                          <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                        </div>
                      <?php }?>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                      <label for="phone">Username</label>
                      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                      <?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
                        <div class = "alert alert-danger">
                          <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                        </div>
                      <?php }?>
                      <?php if ((isset($_smarty_tpl->tpl_vars['error2']->value))) {?>
                        <div class = "alert alert-danger">
                          <?php echo $_smarty_tpl->tpl_vars['error2']->value;?>

                        </div>
                      <?php }?>
                    </div>
                  </div>
                </div>
                <div class="row gutters">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="button3 text-right">
                      <button type="submit" id="submit" name="cancel" class="btn btn-secondary">Cancel</button>
                      <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html><?php }
}
