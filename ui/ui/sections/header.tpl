<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="https://laravel.com/img/favicon/favicon-16x16.png" type='image/x-icon'>
        <title>{$_title} - {$_c['CompanyName']}</title>
        <link rel="stylesheet" href="ui/ui/assets/vendor/chartist/css/chartist.min.css">
        <link href="ui/ui/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="ui/ui/assets/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="ui/ui/fonts/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="ui/ui/fonts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="ui/ui/styles/select2.min.css" />
        <link rel="stylesheet" href="ui/ui/styles/select2-bootstrap.min.css" />
        <link rel="stylesheet" href="ui/ui/styles/sweetalert2.min.css" />
        <link rel="stylesheet" href="ui/ui/styles/plugins/pace.css" />
        <script src="ui/ui/scripts/sweetalert2.all.min.js"></script>
        
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
        {if isset($xheader)}
        {$xheader}
        {/if}
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
                                        <img src="https://robohash.org/{$_admin['id']}?set=set3&size=100x100&bgset=bg1"
                                    onerror="this.src='{$UPLOAD_PATH}/admin.default.png'" class="user-image"
                                    alt="Avatar">
                                        <div class="header-info">
                                            <p>
                                                {$_admin['fullname']}
                                                <small>{Lang::T($_admin['user_type'])}</small>
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item ai-icon" href="{$_url}settings/change-password"><i class="fa fa-settings"></i>
                                            {Lang::T('Change Password')}</a>
                                        <a class="dropdown-item ai-icon" href="{$_url}settings/users-view/{$_admin['id']}">
                                            <i class="fa fa-person"></i> {Lang::T('My Account')}</a>
                                        <a href="{$_url}logout" class="dropdown-item ai-icon btn btn-primary btn-flat"><i
                                            class="fa fa-power"></i> {Lang::T('Logout')}</a>
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
                        <li {if $_system_menu eq 'dashboard' }class="active" {/if}>
                            <a href="{$_url}dashboard">
                                <i class="flaticon-layout"></i> <span class="nav-text">{Lang::T('Dashboard')}</span>
                            </a>
                        </li>
                        {$_MENU_AFTER_DASHBOARD}
                        {if !in_array($_admin['user_type'],['Report'])}
                        <li class="{if in_array($_system_menu, ['customers', 'map'])}active{/if} treeview">
                            <a href="#">
                                <i class="flaticon-381-user-2"></i> <span class="nav-text">{Lang::T('Clients')}</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li {if $_system_menu eq 'customers' }class="active" {/if}><a
                                        href="{$_url}customers">{Lang::T('All Clients')}</a></li>
                                <!--<li {if $_system_menu eq 'map' }class="active" {/if}><a
                                        href="{$_url}map/customer">{Lang::T('PPPOE Clients')}</a></li>-->
                                {$_MENU_CUSTOMERS}
                            </ul>
                        </li>
                        {$_MENU_AFTER_CUSTOMERS}
                        <li class="{if $_system_menu eq 'plan'}active{/if} treeview">
                            <a href="#">
                                <i class="flaticon-381-layer"></i> <span class="nav-text">{Lang::T('Services')}</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <!--<li {if $_routes[1] eq 'list' }class="active" {/if}><a
                                        href="{$_url}plan/list">{Lang::T('Active Users')}</a></li>-->
                                {if $_c['disable_voucher'] != 'yes'}
                                    <li {if $_routes[1] eq 'voucher' }class="active" {/if}><a
                                            href="{$_url}plan/voucher">{Lang::T('Vouchers')}</a></li>
                                    <li {if $_routes[1] eq 'refill' }class="active" {/if}><a
                                            href="{$_url}plan/refill">{Lang::T('Refill Client')}</a></li>
                                {/if}
                                <li {if $_routes[1] eq 'recharge' }class="active" {/if}><a
                                        href="{$_url}plan/recharge">{Lang::T('Recharge Client')}</a></li>
                                {if $_c['enable_balance'] == 'yes'}
                                    <li {if $_routes[1] eq 'deposit' }class="active" {/if}><a
                                            href="{$_url}plan/deposit">{Lang::T('Refill Balance')}</a></li>
                                {/if}
                                {$_MENU_SERVICES}
                            </ul>
                        </li>
                    {/if}
                    {$_MENU_AFTER_SERVICES}
                    {if in_array($_admin['user_type'],['SuperAdmin','Admin'])}
                        <li class="{if $_system_menu eq 'services'}active{/if} treeview">
                            <a href="#">
                                <i class="flaticon-381-network-3"></i> <span class="nav-text">{Lang::T('Internet Plan')}</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <!--<li {if $_routes[1] eq 'hotspot' }class="active" {/if}><a
                                        href="{$_url}services/hotspot">{Lang::T('Hotspot')}</a></li>-->
                                <li {if $_routes[1] eq 'pppoe' }class="active" {/if}><a
                                        href="{$_url}services/pppoe">{Lang::T('PPPOE')}</a></li>
                                <li {if $_routes[1] eq 'list' }class="active" {/if}><a
                                        href="{$_url}bandwidth/list">{Lang::T('Bandwidth')}</a></li>
                                {if $_c['enable_balance'] == 'yes'}
                                    <li {if $_routes[1] eq 'balance' }class="active" {/if}><a
                                            href="{$_url}services/balance">{Lang::T('Balance')}</a></li>
                                {/if}
                                {$_MENU_PLANS}
                            </ul>
                        </li>
                    {/if}
                    {$_MENU_AFTER_PLANS}
                    <li class="{if $_system_menu eq 'reports'}active{/if} treeview">
                        <a href="#">
                            <i class="flaticon-381-bookmark"></i> <span class="nav-text">{Lang::T('Reports')}</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li {if $_routes[1] eq 'daily-report' }class="active" {/if}><a
                                    href="{$_url}reports/daily-report">{Lang::T('Daily Reports')}</a></li>
                            <li {if $_routes[1] eq 'by-period' }class="active" {/if}><a
                                    href="{$_url}reports/by-period">{Lang::T('Period Reports')}</a></li>
                            <li {if $_routes[1] eq 'activation' }class="active" {/if}><a
                                    href="{$_url}reports/activation">{Lang::T('Activation History')}</a></li>
                            {$_MENU_REPORTS}
                        </ul>
                    </li>
                    {$_MENU_AFTER_REPORTS}
                    <li class="{if $_system_menu eq 'message'}active{/if} treeview">
                        <a href="#">
                            <i class="flaticon-381-send-1"></i> <span class="nav-text">{Lang::T('Send Message')}</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li {if $_routes[1] eq 'send' }class="active" {/if}><a
                                    href="{$_url}message/send">{Lang::T('Single Customer')}</a></li>
                            <li {if $_routes[1] eq 'send_bulk' }class="active" {/if}><a
                                    href="{$_url}message/send_bulk">{Lang::T('Bulk Customers')}</a></li>
                            {$_MENU_MESSAGE}
                        </ul>
                    </li>
                    {$_MENU_AFTER_MESSAGE}
                    {if in_array($_admin['user_type'],['SuperAdmin','Admin'])}
                        <li class="{if $_system_menu eq 'network'}active{/if} treeview">
                            <a href="#">
                                <i class="flaticon-381-internet"></i> <span class="nav-text">{Lang::T('Network')}</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li {if $_routes[0] eq 'routers' and $_routes[1] eq 'list' }class="active" {/if}><a
                                        href="{$_url}routers/list">{Lang::T('Routers')}</a></li>
                                <li {if $_routes[0] eq 'pool' and $_routes[1] eq 'list' }class="active" {/if}><a
                                        href="{$_url}pool/list">{Lang::T('IP Pool')}</a></li>
                                {$_MENU_NETWORK}
                            </ul>
                        </li>
                        {$_MENU_AFTER_NETWORKS}
                        {if $_c['radius_enable']}
                            <li class="{if $_system_menu eq 'radius'}active{/if} treeview">
                                <a href="#">
                                    <i class="flaticon-381-network"></i> <span class="nav-text">{Lang::T('Radius')}</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li {if $_routes[0] eq 'radius' and $_routes[1] eq 'nas-list' }class="active" {/if}><a
                                            href="{$_url}radius/nas-list">{Lang::T('Radius NAS')}</a></li>
                                    {$_MENU_RADIUS}
                                </ul>
                            </li>
                        {/if}
                        {$_MENU_AFTER_RADIUS}
                        <li class="{if $_system_menu eq 'pages'}active{/if} treeview">
                            <a href="#">
                                <i class="flaticon-381-folder"></i> <span class="nav-text">{Lang::T("Info Pages")}</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <!--<li {if $_routes[1] eq 'Order_Voucher' }class="active" {/if}><a
                                        href="{$_url}pages/Order_Voucher">{Lang::T('Order Voucher')}</a></li>
                                <li {if $_routes[1] eq 'Voucher' }class="active" {/if}><a
                                        href="{$_url}pages/Voucher">{Lang::T('Voucher')} Template</a></li>-->
                                <li {if $_routes[1] eq 'Announcement' }class="active" {/if}><a
                                        href="{$_url}pages/Announcement">{Lang::T('Announcement')}</a></li>
                                <li {if $_routes[1] eq 'Announcement_Customer' }class="active" {/if}><a
                                        href="{$_url}pages/Announcement_Customer">{Lang::T('Customer Announcement')}</a>
                                </li>
                                <!--<li {if $_routes[1] eq 'Registratfa_Info' }class="active" {/if}><a
                                        href="{$_url}pages/Registration_Info">{Lang::T('Registration Info')}</a></li>
                                <li {if $_routes[1] eq 'Privacy_Policy' }class="active" {/if}><a
                                        href="{$_url}pages/Privacy_Policy">{Lang::T('Privacy Policy')}</a></li>
                                <li {if $_routes[1] eq 'Terms_and_Conditions' }class="active" {/if}><a
                                        href="{$_url}pages/Terms_and_Conditions">{Lang::T('Terms and Conditions')}</a></li>-->
                                {$_MENU_PAGES}
                            </ul>
                        </li>
                    {/if}
                    {$_MENU_AFTER_PAGES}
                    <li
                        class="{if $_system_menu eq 'settings' || $_system_menu eq 'paymentgateway' }active{/if} treeview">
                        <a href="#">
                            <i class="flaticon-381-settings-1"></i> <span class="nav-text">{Lang::T('Settings')}</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            {if in_array($_admin['user_type'],['SuperAdmin','Admin'])}
                                <li {if $_routes[1] eq 'app' }class="active" {/if}><a
                                        href="{$_url}settings/app">{Lang::T('General Settings')}</a></li>
                                <li {if $_routes[1] eq 'localisation' }class="active" {/if}><a
                                        href="{$_url}settings/localisation">{Lang::T('Localisation')}</a></li>
                                <li {if $_routes[1] eq 'notifications' }class="active" {/if}><a
                                        href="{$_url}settings/notifications">{Lang::T('User Notification')}</a></li>
                            {/if}
                            {if in_array($_admin['user_type'],['SuperAdmin','Admin','Agent'])}
                                <li {if $_routes[1] eq 'users' }class="active" {/if}><a
                                        href="{$_url}settings/users">{Lang::T('Administrator Users')}</a></li>
                            {/if}
                            {if in_array($_admin['user_type'],['SuperAdmin','Admin'])}
                                <li {if $_routes[1] eq 'dbstatus' }class="active" {/if}><a
                                        href="{$_url}settings/dbstatus">{Lang::T('Backup/Restore')}</a></li>
                                <li {if $_system_menu eq 'paymentgateway' }class="active" {/if}>
                                    <a href="{$_url}paymentgateway">
                                        <span class="text">{Lang::T('Payment Gateway')}</span>
                                    </a>
                                </li>
                                {$_MENU_SETTINGS}
                            {/if}
                        </ul>
                    </li>
                    {$_MENU_AFTER_SETTINGS}
                    {if in_array($_admin['user_type'],['SuperAdmin','Admin'])}
                        <li class="{if $_system_menu eq 'logs' }active{/if} treeview">
                            <a href="#">
                                <i class="flaticon-381-clock"></i> <span class="nav-text">{Lang::T('Logs')}</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li {if $_routes[1] eq 'list' }class="active" {/if}><a
                                        href="{$_url}logs/mikropulse">Mikropulse</a></li>
                                {if $_c['radius_enable']}
                                    <li {if $_routes[1] eq 'radius' }class="active" {/if}><a
                                            href="{$_url}logs/radius">Radius</a>
                                    </li>
                                {/if}
                            </ul>
                            {$_MENU_LOGS}
                        </li>
                    {/if}
                    {$_MENU_AFTER_LOGS}
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
                    {if isset($notify)}
                        <script>
                            // Display SweetAlert toast notification
                            Swal.fire({
                                icon: '{if $notify_t == "s"}success{else}error{/if}',
                                title: '{$notify}',
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
                        </script>
                    {/if}
