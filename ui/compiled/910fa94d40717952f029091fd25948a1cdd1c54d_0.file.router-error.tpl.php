<?php
/* Smarty version 4.3.1, created on 2024-06-24 23:11:06
  from '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/router-error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6679d2da6ad314_37701388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '910fa94d40717952f029091fd25948a1cdd1c54d' => 
    array (
      0 => '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/router-error.tpl',
      1 => 1719101404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6679d2da6ad314_37701388 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://laravel.com/img/favicon/favicon-16x16.png" type='image/x-icon'>
    <title><?php echo Lang::T('Login');?>
 - <?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</title>
    <link rel="stylesheet" href="assets/vendor/chartist/css/chartist.min.css">
    <link href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
; url=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
    <style>
        ::-moz-selection {
            /* Code for Firefox */
            color: red;
            background: yellow;
        }

        ::selection {
            color: red;
            background: yellow;
        }
    </style>
</head>

<body class="hold-transition skin-blue" style="background-color:#e9ecef;">
    <div class="container-fluid">
        <center>
            <div class="col-md-8" style="margin-top: 80px;">
                <div class="card card-danger card-solid">
                    <div class="card-header">
                        <h3 class="card-title">
                            <?php echo $_smarty_tpl->tpl_vars['error_title']->value;?>

                        </h3>
                    </div>
                    <div class="card-body" style="font-size: larger; text-align: start;">
                        <h5 class="text-danger"><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</h5>
                        <hr>
                        <h5 class="text-info">Mikrotik troubleshooting: </h5>
                        <ol>
                            <li>1. Make sure you use API Port, Default 8728</li>
                            <li>2. Make sure Username and Password are correct</li>
                            <li>3. Make sure your hosting is not blocking port to external</li>
                            <li>4. Make sure your is Mikrotik accessible from MikroPulse</li>
                        </ol>
                        <span class="text-info">Note: </span>If you just update MikroPulse from upload files, try
                        contact admin
                    </div>
                    <!-- <div class="card-footer">
                        <div class="" role="group" aria-label="...">
                            <a href="./update.php?step=4"
                                class="btn btn-info btn-sm btn-block mb-3">Update Database</a>
                            <a href="#" " class="btn btn-success btn-sm btn-block mb-4">Update
                                Mikropulse</a>
                        </div>
                        <a href="javascript::history.back()" onclick="history.back()"
                            class="btn btn-warning btn-block">back</a>
                    </div>-->
                </div>
            </div>
        </center>
    </div>
</body>

</html><?php }
}
