<?php
/* Smarty version 4.2.1, created on 2024-10-03 15:40:13
  from 'C:\xampp\htdocs\phpCheck\cyberfire\public_html\templates\Notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_66fef31d660879_37493583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8ed16866ff11fa5bcf6a8e16d27cdc99af6a253' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phpCheck\\cyberfire\\public_html\\templates\\Notifications.tpl',
      1 => 1724169055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fef31d660879_37493583 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aura Aquatics Scheduling</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bigChungus.css" />
</head>
<body>
<header>
    <img class="logo" src="img/logo.png" alt="blank" width="8%" height="8%"/>
    <nav>
        <ul class="nav__links">
            <li><a href="houston.php">Schedule Manager</a></li>
            <li><a href="Notifications.php">Notifications</a></li>
            <li><a href="profile.php">Profile</a></li>
        </ul>
    </nav>
    <a class="cta" href="login.php"><button>Logout</button></a>
</header>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['convo']->value, 'myConvos');
$_smarty_tpl->tpl_vars['myConvos']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['myConvos']->value) {
$_smarty_tpl->tpl_vars['myConvos']->do_else = false;
?>
    <div class ="contentContainer">
        <div class ="view">
            <p style="font-size:36px; font-style: normal; height:20%; padding: 1% 0% 0% 2%">Notifications</p>
            <div style="height: 80%">
                <!--Inline style used to override row gutter-->
                <div class="paddingMeBoyMeBob">
                    <button type="button" class="row messageCont d-flex align-items-center" style="--bs-gutter-x: 0" onclick="open<?php echo $_smarty_tpl->tpl_vars['accumulator']->value;?>
()">
                        <div class="col-2 d-flex align-items-center"><img src="img/circle-32.png" alt="gray circle" class="profileImg"></img>Jim(Employee)</div>
                        <div class="col-6"><p class="message"><img src="img/greenCircle-16.png" alt="green circle" class="profileImg">(jim):Hey can i have the day off tommorow my car broke...</p></div>
                        <div class="col-2"><p style="float:right">9:32 am</p></div>
                        <div class="col-2"><p style="float:left; padding-left: 15px">Today</p></div>
                    </button>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal<?php echo $_smarty_tpl->tpl_vars['accumulator']->value;?>
" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 300%; width: 60%; margin-top: 5%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><img src="img/circle-32.png" alt="gray circle" class="profileImg"> Jim</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myConvos']->value, 'messages');
$_smarty_tpl->tpl_vars['messages']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['messages']->value) {
$_smarty_tpl->tpl_vars['messages']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['idUser']->value == $_smarty_tpl->tpl_vars['messages']->value["sender_id"]) {?>
                                    <div class="row d-flex align-items-center" style="flex-direction: row">
                                        <img src="img/circle-32.png" alt="gray circle" class="profileImg col-1">
                                        <p class="col-6 messageOther"><?php echo $_smarty_tpl->tpl_vars['messages']->value["message"];?>
</p>
                                    </div>
                                <?php } else { ?>
                                    <div class="row d-flex align-items-center" style="flex-direction: row-reverse; margin-top: 3%; margin-bottom: 3%; ">
                                        <img src="img/circle-32.png" alt="gray circle" class="profileImg col-1">
                                        <p class="col-2 messageMine"><?php echo $_smarty_tpl->tpl_vars['messages']->value["message"];?>
</p>
                                    </div>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                    <div class="modal-footer" style="align-items: center; border-top:none;">
                        <div style="height: 100%; width: 100%; border-style: solid; border-width: 1px;">
                            <p style="padding-left: 1%">text...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
>
        function open<?php echo $_smarty_tpl->tpl_vars['accumulator']->value;?>
(){
            $('#exampleModal<?php echo $_smarty_tpl->tpl_vars['accumulator']->value;?>
').modal('show');
            console.log("Running");
        }
    <?php echo '</script'; ?>
>
    <?php $_smarty_tpl->_assignInScope('accumulator', $_smarty_tpl->tpl_vars['accumulator']->value+1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</body>
</html><?php }
}
