<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://laravel.com/img/favicon/favicon-16x16.png" type='image/x-icon'>
    <title>{Lang::T('Login')} - {$_c['CompanyName']}</title>
    <link rel="stylesheet" href="assets/vendor/chartist/css/chartist.min.css">
    <link href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <meta http-equiv="refresh" content="{$time}; url={$url}">
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
                            {$error_title}
                        </h3>
                    </div>
                    <div class="card-body" style="font-size: larger; text-align: start;">
                        <h5 class="text-danger">{$error_message}</h5>
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

</html>