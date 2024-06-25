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
            <div class="title">{$_c['CompanyName']} - Admin</div>
            {if isset($notify)}
            {$notify}
            {/if}
            <form action="{$_url}admin/post" method="post">
                <div class="login-in">
                    <div class="username">
                        <i class="lni lni-user"></i>
                        <input type="text" required class="form-control" name="username" placeholder="{Lang::T('Username')}">
                    </div>
                <div class="password">
                    <i class="lni lni-lock"></i>
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