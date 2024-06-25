<?php
/* Smarty version 4.3.1, created on 2024-06-24 23:11:12
  from '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6679d2e05a5142_66745895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b070b47d1e15fddb996f4d4bedb558e94468a138' => 
    array (
      0 => '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/alert.tpl',
      1 => 1717972994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6679d2e05a5142_66745895 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://laravel.com/img/favicon/favicon-16x16.png" type='image/x-icon'>
    <title><?php echo Lang::T('Login');?>
 - <?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</title>
    <link rel="stylesheet" href="ui/ui/assets/vendor/chartist/css/chartist.min.css">
        <link href="ui/ui/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="ui/ui/assets/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="ui/ui/styles/sweetalert2.min.css" />
        <link rel="stylesheet" href="ui/ui/styles/plugins/pace.css" />
        <?php echo '<script'; ?>
 src="ui/ui/scripts/sweetalert2.all.min.js"><?php echo '</script'; ?>
>
    <meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
; url=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
</head>

<body style="background-color:#e9ecef;">
    <div class="" style="margin-top: 72px;">
        <div class="container-fluid">
            <div class="col-xl-12 col-xxl-12">
                    <div class="col-md-12">
                        <div class="card" style="display: grid; align-content: center;">
                            <div class="card-body text-center ai-icon  text-primary">
                                <h4 class="my-2"><?php echo ucwords(Lang::T($_smarty_tpl->tpl_vars['type']->value));?>
</h4>
                                <div class="my-2"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</div>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" id="button" class="btn my-2 btn-primary btn-lg px-4"><i
                                class="fa fa-usd"></i> <?php echo Lang::T('Click Here');?>
 (<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
)</a>
                                <div class="lockscreen-footer text-center">
                                    <?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
>
        var time = <?php echo $_smarty_tpl->tpl_vars['time']->value;?>
;
        timer();

        function timer() {
            setTimeout(() => {
                time--;
                if (time > -1) {
                    document.getElementById("button").innerHTML = "<?php echo Lang::T('Click Here');?>
 (" + time + ")";
                    timer();
                }
            }, 1000);
        }
    <?php echo '</script'; ?>
>
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
