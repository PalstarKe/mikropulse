<?php
/* Smarty version 4.3.1, created on 2024-06-24 23:12:00
  from '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/user-login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6679d310e774d1_29093175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e53166913bbb190bea74a5111147f8eb1df1281f' => 
    array (
      0 => '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/user-login.tpl',
      1 => 1719136029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6679d310e774d1_29093175 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="https://laravel.com/img/favicon/favicon-16x16.png" type='image/x-icon'>
        <title><?php echo Lang::T('Login');?>
 - <?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</title>
        <link rel="stylesheet" href="ui/ui/Css/lineicons.min.css">
        <link rel="stylesheet" href="ui/ui/Css/Style.css">
        
        <meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
; url=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
    </head>

    <body>
        <div class="login-div">
            <div class="logo"></div>
            <div class="title"><?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
 - Member Login</div>
            <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
            <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

            <?php }?>
            <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
login/post" method="post">
                <div class="login-in">
                    <div class="username">
                        <i class="fa fa-user"></i>
                        <div class="input-group">
                    <?php if ($_smarty_tpl->tpl_vars['_c']->value['country_code_phone'] != '') {?>
                        <span class="input-group-text" id="basic-addon1"><i
                        class="fa fa-phone"></i></span>
                    <?php } else { ?>
                        <span class="input-group-text" id="basic-addon1"><i
                                class="fa fa-user"></i></span>
                    <?php }?>
                    <input type="text" class="form-control" name="username"
                placeholder="<?php if ($_smarty_tpl->tpl_vars['_c']->value['country_code_phone'] != '') {
echo $_smarty_tpl->tpl_vars['_c']->value['country_code_phone'];?>
 <?php echo Lang::T('Phone Number');
} else {
echo Lang::T('Username');
}?>">
                </div>
                    </div>
                <div class="password">
                    <i class="fa fa-lock"></i>
                    <input type="password" required class="form-control" name="password" placeholder="<?php echo Lang::T('Password');?>
">
                </div>
                </div>
                <button type="submit" class="buttons" value="<?php echo Lang::T('Login');?>
">login</button>
            </form>
        </div> 
            <?php echo '<script'; ?>
 src="assets/vendor/global/global.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/vendor/chart.js/Chart.bundle.min.js"><?php echo '</script'; ?>
>
            <!-- Chart piety plugin files -->
            <?php echo '<script'; ?>
 src="assets/vendor/peity/jquery.peity.min.js"><?php echo '</script'; ?>
>

            <!-- Apex Chart -->
            <?php echo '<script'; ?>
 src="assets/vendor/apexchart/apexchart.js"><?php echo '</script'; ?>
>

            <!-- Dashboard 1 -->
            <?php echo '<script'; ?>
 src="assets/js/dashboard/dashboard-1.js"><?php echo '</script'; ?>
>

            <?php echo '<script'; ?>
 src="assets/js/custom.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/js/deznav-init.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/js/demo.js"><?php echo '</script'; ?>
>
    </body>

</html>
<?php }
}
