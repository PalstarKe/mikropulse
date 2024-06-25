<?php
/* Smarty version 4.3.1, created on 2024-06-24 23:22:38
  from '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/a404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6679d58e72d630_58678265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6813a221c6359010f76773cfc29c1233bee353ec' => 
    array (
      0 => '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/a404.tpl',
      1 => 1713369240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6679d58e72d630_58678265 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://laravel.com/img/favicon/favicon-16x16.png" type='image/x-icon'>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="assets/vendor/chartist/css/chartist.min.css">
    <link href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body style="background-color:#e9ecef;">
    <div class="" style="margin-top: 32px;">
        <div class="container-fluid">
            <div class="col-xl-12 col-xxl-12">
                    <div class="col-md-12">
                        <div class="card" style="display: grid; align-content: center;">
                            <div class="card-body text-center ai-icon  text-primary">
                                <i class="flaticon-381-error"></i>
                                <h4 class="my-2">404</h4>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" title="Go to Dashboard" class="btn my-2 btn-primary btn-lg px-4"><i
                                class="fa fa-usd"></i> Go to Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

</html><?php }
}
