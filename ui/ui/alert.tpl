<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://laravel.com/img/favicon/favicon-16x16.png" type='image/x-icon'>
    <title>{Lang::T('Login')} - {$_c['CompanyName']}</title>
    <link rel="stylesheet" href="ui/ui/assets/vendor/chartist/css/chartist.min.css">
        <link href="ui/ui/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="ui/ui/assets/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="ui/ui/styles/sweetalert2.min.css" />
        <link rel="stylesheet" href="ui/ui/styles/plugins/pace.css" />
        <script src="ui/ui/scripts/sweetalert2.all.min.js"></script>
    <meta http-equiv="refresh" content="{$time}; url={$url}">
</head>

<body style="background-color:#e9ecef;">
    <div class="" style="margin-top: 72px;">
        <div class="container-fluid">
            <div class="col-xl-12 col-xxl-12">
                    <div class="col-md-12">
                        <div class="card" style="display: grid; align-content: center;">
                            <div class="card-body text-center ai-icon  text-primary">
                                <h4 class="my-2">{ucwords(Lang::T($type))}</h4>
                                <div class="my-2">{$text}</div>
                                <a href="{$url}" id="button" class="btn my-2 btn-primary btn-lg px-4"><i
                                class="fa fa-usd"></i> {Lang::T('Click Here')} ({$time})</a>
                                <div class="lockscreen-footer text-center">
                                    {$_c['CompanyName']}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var time = {$time};
        timer();

        function timer() {
            setTimeout(() => {
                time--;
                if (time > -1) {
                    document.getElementById("button").innerHTML = "{Lang::T('Click Here')} (" + time + ")";
                    timer();
                }
            }, 1000);
        }
    </script>
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