{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12" id="update">
                        <div class="card card-primary card-hovered mb20 activities">
                            <div class="card-header">
                                <h3 class="card-title">MikroPulse</h3>
                            </div>
                            <div class="card-body">
                                <b>MikroPulse</b> is a Billing System for Hotspot and PPPOE in Mikrotik using PHP and Mikrotik API to comunicate with router.
                                <hr>
                                <div id="currentVersion">Current Version: </div>
                                <div id="latestVersion">Latest Version: </div>
                            </div>
                            <div class="card-body">
                                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                    <a href="./update.php" class="btn btn-success btn-sm btn-block">Install Latest Version</a>
                                    <a href="https://github.com/hotspotbilling/phpnuxbill/archive/refs/heads/master.zip" target="_blank"
                                        class="btn btn-warning btn-sm btn-block">Download Latest Version</a>
                                </div>
                            </div>
                            <div class="card-body">
                                If you Download manual the update file, sometime update change database, after uploading, click this button to update database structure.
                                <a href="./update.php?step=4" class="btn btn-default btn-sm btn-block">Update Database</a>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    window.addEventListener('DOMContentLoaded', function() {
                        $.getJSON("./version.json?" + Math.random(), function(data) {
                            $('#currentVersion').html('Current Version: ' + data.version);
                        });
                        $.getJSON("https://raw.githubusercontent.com/hotspotbilling/phpnuxbill/master/version.json?" + Math
                            .random(),
                            function(data) {
                                $('#latestVersion').html('Latest Version: ' + data.version);
                            });
                    });
                </script>
            </div>
{include file="sections/footer.tpl"}