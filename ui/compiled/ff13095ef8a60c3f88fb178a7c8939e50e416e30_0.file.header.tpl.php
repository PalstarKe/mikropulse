<?php
/* Smarty version 4.3.1, created on 2024-06-25 03:17:26
  from '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/sections/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_667a0c967f4cc9_14430045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff13095ef8a60c3f88fb178a7c8939e50e416e30' => 
    array (
      0 => '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/sections/header.tpl',
      1 => 1719274611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667a0c967f4cc9_14430045 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="https://laravel.com/img/favicon/favicon-16x16.png" type='image/x-icon'>
        <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</title>
        <link rel="stylesheet" href="ui/ui/assets/vendor/chartist/css/chartist.min.css">
        <link href="ui/ui/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="ui/ui/assets/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="ui/ui/fonts/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="ui/ui/fonts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="ui/ui/styles/select2.min.css" />
        <link rel="stylesheet" href="ui/ui/styles/select2-bootstrap.min.css" />
        <link rel="stylesheet" href="ui/ui/styles/sweetalert2.min.css" />
        <link rel="stylesheet" href="ui/ui/styles/plugins/pace.css" />
        <?php echo '<script'; ?>
 src="ui/ui/scripts/sweetalert2.all.min.js"><?php echo '</script'; ?>
>
        
            <style>
        ::-moz-selection {
             Code for Firefox 
            color: red;
            background: yellow;
        }

        ::selection {
            color: red;
            background: yellow;
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            margin-top: 0px !important;
        }

        @media (min-width: 768px) {
            .outer {
                height: 200px
                    /* Or whatever */
            }
        }

        th:first-child,
        td:first-child {
            position: sticky;
            left: 0px;
            background-color: #f9f9f9;
        }


        .text1line {
            display: block;
            /* or inline-block */
            text-overflow: ellipsis;
            word-wrap: break-word;
            overflow: hidden;
            max-height: 1em;
            line-height: 1em;
        }


        .loading {
            pointer-events: none;
            opacity: 0.7;
        }

        .loading::after {
            content: "";
            display: inline-block;
            width: 16px;
            height: 16px;
            vertical-align: middle;
            margin-left: 10px;
            border: 2px solid #fff;
            border-top-color: transparent;
            border-radius: 50%;
            animation: spin 0.8s infinite linear;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

       /*
         * maintenance top-bar 
         */

         .notification-top-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 40px;
            line-height: 40px;
            width: 100%;
            background: #ec2106;
            text-align: center;
            color: #FFFFFF;
            font-family: serif;
            font-weight: bolder;
            font-size: 14px;
            z-index: 9999;
            box-sizing: border-box;
            padding: 0 10px;
        }

        .notification-top-bar p {
            padding: 0;
            margin: 0;
        }

        .notification-top-bar p a {
            padding: 5px 10px;
            border-radius: 3px;
            background: #FFF;
            color: #1ABC9C;
            font-weight: bold;
            text-decoration: none;
            display: inline;
            font-size: inherit;
        }

        @media (max-width: 600px) {
            .notification-top-bar {
                font-size: 12px;
                height: auto;
                line-height: normal;
                padding: 10px;
            }

            .notification-top-bar p a {
                padding: 5px 10px;
                margin: 5px 0;
                font-size: 10px;
                display: inline-block;
            }
        }
    </style>
        <?php if ((isset($_smarty_tpl->tpl_vars['xheader']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['xheader']->value;?>

        <?php }?>
    </head>

    <body>
        <!--**********************************
            Main wrapper start
                ***********************************-->
        <div id="main-wrapper">

            <!--**********************************
                    Nav header start
                ***********************************-->
			<div class="nav-header">
				<a href="#" class="brand-logo">
					<i class="logo-abbr fa-brands fa-stumbleupon"></i>
					<p class="brand-title" width="124px" height="33px"  style="font-size: 30px;">Admin</p>
				</a>
				<div class="nav-control">
					<div class="hamburger">
						<span class="line"></span><span class="line"></span><span class="line"></span>
					</div>
				</div>
			</div>
            <!--**********************************
                    Nav header end
                ***********************************-->



            <!--**********************************
                    Header start
                ***********************************-->
            <div class="header">
                <div class="header-content">
                    <nav class="navbar navbar-expand">
                        <div class="collapse navbar-collapse justify-content-between">
                            <div class="header-left">
                                <div class="dashboard_bar">
                                    Mikropulse
                                </div>
                            </div>
                            <ul class="navbar-nav header-right">
                                <li class="nav-item">
                                    <div class="input-group search-area d-lg-inline-flex d-none">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><a href="javascript:void(0)"><i
                                                        class="flaticon-381-search-2"></i></a></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search here...">
                                    </div>
                                </li>
                                <li class="nav-item dropdown header-profile">
                                    <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                        <img src="https://robohash.org/<?php echo $_smarty_tpl->tpl_vars['_admin']->value['id'];?>
?set=set3&size=100x100&bgset=bg1"
                                    onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['UPLOAD_PATH']->value;?>
/admin.default.png'" class="user-image"
                                    alt="Avatar">
                                        <div class="header-info">
                                            <p>
                                                <?php echo $_smarty_tpl->tpl_vars['_admin']->value['fullname'];?>

                                                <small><?php echo Lang::T($_smarty_tpl->tpl_vars['_admin']->value['user_type']);?>
</small>
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item ai-icon" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/change-password"><i class="fa fa-settings"></i>
                                            <?php echo Lang::T('Change Password');?>
</a>
                                        <a class="dropdown-item ai-icon" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-view/<?php echo $_smarty_tpl->tpl_vars['_admin']->value['id'];?>
">
                                            <i class="fa fa-person"></i> <?php echo Lang::T('My Account');?>
</a>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout" class="dropdown-item ai-icon btn btn-primary btn-flat"><i
                                            class="fa fa-power"></i> <?php echo Lang::T('Logout');?>
</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!--**********************************
                    Header end ti-comment-alt
                ***********************************-->

            <!--**********************************
                    Sidebar start
                ***********************************-->
            <div class="deznav">
                <div class="deznav-scroll dz-demo-content">
                    <ul class="metismenu" id="menu" data-widget="tree">
                        <li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'dashboard') {?>class="active" <?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard">
                                <i class="flaticon-layout"></i> <span class="nav-text"><?php echo Lang::T('Dashboard');?>
</span>
                            </a>
                        </li>
                        <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_DASHBOARD']->value;?>

                        <?php if (!in_array($_smarty_tpl->tpl_vars['_admin']->value['user_type'],array('Report'))) {?>
                        <li class="<?php if (in_array($_smarty_tpl->tpl_vars['_system_menu']->value,array('customers','map'))) {?>active<?php }?> treeview">
                            <a href="#">
                                <i class="flaticon-381-user-2"></i> <span class="nav-text"><?php echo Lang::T('Clients');?>
</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'customers') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers"><?php echo Lang::T('All Clients');?>
</a></li>
                                <!--<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'map') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
map/customer"><?php echo Lang::T('PPPOE Clients');?>
</a></li>-->
                                <?php echo $_smarty_tpl->tpl_vars['_MENU_CUSTOMERS']->value;?>

                            </ul>
                        </li>
                        <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_CUSTOMERS']->value;?>

                        <li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'plan') {?>active<?php }?> treeview">
                            <a href="#">
                                <i class="flaticon-381-layer"></i> <span class="nav-text"><?php echo Lang::T('Services');?>
</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <!--<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'list') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plan/list"><?php echo Lang::T('Active Users');?>
</a></li>-->
                                <?php if ($_smarty_tpl->tpl_vars['_c']->value['disable_voucher'] != 'yes') {?>
                                    <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'voucher') {?>class="active" <?php }?>><a
                                            href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plan/voucher"><?php echo Lang::T('Vouchers');?>
</a></li>
                                    <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'refill') {?>class="active" <?php }?>><a
                                            href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plan/refill"><?php echo Lang::T('Refill Client');?>
</a></li>
                                <?php }?>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'recharge') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plan/recharge"><?php echo Lang::T('Recharge Client');?>
</a></li>
                                <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes') {?>
                                    <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'deposit') {?>class="active" <?php }?>><a
                                            href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plan/deposit"><?php echo Lang::T('Refill Balance');?>
</a></li>
                                <?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['_MENU_SERVICES']->value;?>

                            </ul>
                        </li>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_SERVICES']->value;?>

                    <?php if (in_array($_smarty_tpl->tpl_vars['_admin']->value['user_type'],array('SuperAdmin','Admin'))) {?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'services') {?>active<?php }?> treeview">
                            <a href="#">
                                <i class="flaticon-381-network-3"></i> <span class="nav-text"><?php echo Lang::T('Internet Plan');?>
</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <!--<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'hotspot') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/hotspot"><?php echo Lang::T('Hotspot');?>
</a></li>-->
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'pppoe') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/pppoe"><?php echo Lang::T('PPPOE');?>
</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'list') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
bandwidth/list"><?php echo Lang::T('Bandwidth');?>
</a></li>
                                <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes') {?>
                                    <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'balance') {?>class="active" <?php }?>><a
                                            href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/balance"><?php echo Lang::T('Balance');?>
</a></li>
                                <?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['_MENU_PLANS']->value;?>

                            </ul>
                        </li>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_PLANS']->value;?>

                    <li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'reports') {?>active<?php }?> treeview">
                        <a href="#">
                            <i class="flaticon-381-bookmark"></i> <span class="nav-text"><?php echo Lang::T('Reports');?>
</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'daily-report') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/daily-report"><?php echo Lang::T('Daily Reports');?>
</a></li>
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'by-period') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/by-period"><?php echo Lang::T('Period Reports');?>
</a></li>
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'activation') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/activation"><?php echo Lang::T('Activation History');?>
</a></li>
                            <?php echo $_smarty_tpl->tpl_vars['_MENU_REPORTS']->value;?>

                        </ul>
                    </li>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_REPORTS']->value;?>

                    <li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'message') {?>active<?php }?> treeview">
                        <a href="#">
                            <i class="flaticon-381-send-1"></i> <span class="nav-text"><?php echo Lang::T('Send Message');?>
</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'send') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
message/send"><?php echo Lang::T('Single Customer');?>
</a></li>
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'send_bulk') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
message/send_bulk"><?php echo Lang::T('Bulk Customers');?>
</a></li>
                            <?php echo $_smarty_tpl->tpl_vars['_MENU_MESSAGE']->value;?>

                        </ul>
                    </li>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_MESSAGE']->value;?>

                    <?php if (in_array($_smarty_tpl->tpl_vars['_admin']->value['user_type'],array('SuperAdmin','Admin'))) {?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'network') {?>active<?php }?> treeview">
                            <a href="#">
                                <i class="flaticon-381-internet"></i> <span class="nav-text"><?php echo Lang::T('Network');?>
</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[0] == 'routers' && $_smarty_tpl->tpl_vars['_routes']->value[1] == 'list') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/list"><?php echo Lang::T('Routers');?>
</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[0] == 'pool' && $_smarty_tpl->tpl_vars['_routes']->value[1] == 'list') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pool/list"><?php echo Lang::T('IP Pool');?>
</a></li>
                                <?php echo $_smarty_tpl->tpl_vars['_MENU_NETWORK']->value;?>

                            </ul>
                        </li>
                        <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_NETWORKS']->value;?>

                        <?php if ($_smarty_tpl->tpl_vars['_c']->value['radius_enable']) {?>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'radius') {?>active<?php }?> treeview">
                                <a href="#">
                                    <i class="flaticon-381-network"></i> <span class="nav-text"><?php echo Lang::T('Radius');?>
</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[0] == 'radius' && $_smarty_tpl->tpl_vars['_routes']->value[1] == 'nas-list') {?>class="active" <?php }?>><a
                                            href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
radius/nas-list"><?php echo Lang::T('Radius NAS');?>
</a></li>
                                    <?php echo $_smarty_tpl->tpl_vars['_MENU_RADIUS']->value;?>

                                </ul>
                            </li>
                        <?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_RADIUS']->value;?>

                        <li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'pages') {?>active<?php }?> treeview">
                            <a href="#">
                                <i class="flaticon-381-folder"></i> <span class="nav-text"><?php echo Lang::T("Info Pages");?>
</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <!--<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'Order_Voucher') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pages/Order_Voucher"><?php echo Lang::T('Order Voucher');?>
</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'Voucher') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pages/Voucher"><?php echo Lang::T('Voucher');?>
 Template</a></li>-->
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'Announcement') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pages/Announcement"><?php echo Lang::T('Announcement');?>
</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'Announcement_Customer') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pages/Announcement_Customer"><?php echo Lang::T('Customer Announcement');?>
</a>
                                </li>
                                <!--<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'Registratfa_Info') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pages/Registration_Info"><?php echo Lang::T('Registration Info');?>
</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'Privacy_Policy') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pages/Privacy_Policy"><?php echo Lang::T('Privacy Policy');?>
</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'Terms_and_Conditions') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pages/Terms_and_Conditions"><?php echo Lang::T('Terms and Conditions');?>
</a></li>-->
                                <?php echo $_smarty_tpl->tpl_vars['_MENU_PAGES']->value;?>

                            </ul>
                        </li>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_PAGES']->value;?>

                    <li
                        class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'settings' || $_smarty_tpl->tpl_vars['_system_menu']->value == 'paymentgateway') {?>active<?php }?> treeview">
                        <a href="#">
                            <i class="flaticon-381-settings-1"></i> <span class="nav-text"><?php echo Lang::T('Settings');?>
</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if (in_array($_smarty_tpl->tpl_vars['_admin']->value['user_type'],array('SuperAdmin','Admin'))) {?>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'app') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app"><?php echo Lang::T('General Settings');?>
</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'localisation') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/localisation"><?php echo Lang::T('Localisation');?>
</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'notifications') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/notifications"><?php echo Lang::T('User Notification');?>
</a></li>
                            <?php }?>
                            <?php if (in_array($_smarty_tpl->tpl_vars['_admin']->value['user_type'],array('SuperAdmin','Admin','Agent'))) {?>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'users') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users"><?php echo Lang::T('Administrator Users');?>
</a></li>
                            <?php }?>
                            <?php if (in_array($_smarty_tpl->tpl_vars['_admin']->value['user_type'],array('SuperAdmin','Admin'))) {?>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'dbstatus') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/dbstatus"><?php echo Lang::T('Backup/Restore');?>
</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'paymentgateway') {?>class="active" <?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
paymentgateway">
                                        <span class="text"><?php echo Lang::T('Payment Gateway');?>
</span>
                                    </a>
                                </li>
                                <?php echo $_smarty_tpl->tpl_vars['_MENU_SETTINGS']->value;?>

                            <?php }?>
                        </ul>
                    </li>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_SETTINGS']->value;?>

                    <?php if (in_array($_smarty_tpl->tpl_vars['_admin']->value['user_type'],array('SuperAdmin','Admin'))) {?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'logs') {?>active<?php }?> treeview">
                            <a href="#">
                                <i class="flaticon-381-clock"></i> <span class="nav-text"><?php echo Lang::T('Logs');?>
</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'list') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logs/mikropulse">Mikropulse</a></li>
                                <?php if ($_smarty_tpl->tpl_vars['_c']->value['radius_enable']) {?>
                                    <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'radius') {?>class="active" <?php }?>><a
                                            href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logs/radius">Radius</a>
                                    </li>
                                <?php }?>
                            </ul>
                            <?php echo $_smarty_tpl->tpl_vars['_MENU_LOGS']->value;?>

                        </li>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_LOGS']->value;?>

                    </ul>
                </div>
            </div>
            <!--**********************************
                    Sidebar end
                ***********************************-->

            <!--**********************************
                    Content body start
                ***********************************-->
            <div class="content-body">
                    <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
                        <?php echo '<script'; ?>
>
                            // Display SweetAlert toast notification
                            Swal.fire({
                                icon: '<?php if ($_smarty_tpl->tpl_vars['notify_t']->value == "s") {?>success<?php } else { ?>error<?php }?>',
                                title: '<?php echo $_smarty_tpl->tpl_vars['notify']->value;?>
',
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 5000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            });
                        <?php echo '</script'; ?>
>
                    <?php }
}
}
