<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="https://laravel.com/img/favicon/favicon-16x16.png" type='image/x-icon'>
        <title>{Lang::T('Login')} - {$_c['CompanyName']}</title>
        <link rel="stylesheet" href="ui/ui/Css/lineicons.min.css">
        <link rel="stylesheet" href="ui/ui/Css/Style.css">
        
        <meta http-equiv="refresh" content="{$time}; url={$url}">
    </head>

    <body>
        <div class="login-div">
            <div class="logo"></div>
            <div class="title">{$_c['CompanyName']} - Member Login</div>
            {if isset($notify)}
            {$notify}
            {/if}
            <form action="{$_url}login/post" method="post">
                <div class="login-in">
                    <div class="username">
                        <i class="fa fa-user"></i>
                        <div class="input-group">
                    {if $_c['country_code_phone']!= ''}
                        <span class="input-group-text" id="basic-addon1"><i
                        class="fa fa-phone"></i></span>
                    {else}
                        <span class="input-group-text" id="basic-addon1"><i
                                class="fa fa-user"></i></span>
                    {/if}
                    <input type="text" class="form-control" name="username"
                placeholder="{if $_c['country_code_phone']!= ''}{$_c['country_code_phone']} {Lang::T('Phone Number')}{else}{Lang::T('Username')}{/if}">
                </div>
                    </div>
                <div class="password">
                    <i class="fa fa-lock"></i>
                    <input type="password" required class="form-control" name="password" placeholder="{Lang::T('Password')}">
                </div>
                </div>
                <button type="submit" class="buttons" value="{Lang::T('Login')}">login</button>
            </form>
        </div> 
            <script src="assets/vendor/global/global.min.js"></script>
            <script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
            <script src="assets/vendor/chart.js/Chart.bundle.min.js"></script>
            <!-- Chart piety plugin files -->
            <script src="assets/vendor/peity/jquery.peity.min.js"></script>

            <!-- Apex Chart -->
            <script src="assets/vendor/apexchart/apexchart.js"></script>

            <!-- Dashboard 1 -->
            <script src="assets/js/dashboard/dashboard-1.js"></script>

            <script src="assets/js/custom.min.js"></script>
            <script src="assets/js/deznav-init.js"></script>
            <script src="assets/js/demo.js"></script>
    </body>

</html>
