
{include file="sections/header.tpl"}
            <div class="container-fluid">
                <style>
                    .icon i{
                        font-size: 36px;
                    }
                </style>
                <div class="row">
                    <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                        <div class="card card-bd">
                            <div class="bg-secondary card-border" style="background:#3444d5 !important;"></div>
                            <div class="card-body box-style">
                                <div class="media align-items-center col">
                                    <div class="inner media-body me-3">
                                        <h4 class=" num-text text-black font-w200">{$_c['currency_code']}{number_format($iday,0,$_c['dec_point'],$_c['thousands_sep'])}</h4>
                                        <p class="fs-14">{Lang::T('Income Today')}</p>
                                    </div>
                                    <!--<div class="icon" style="color: #864AD1;">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div> -->
                                </div>
                                <div class="">
                                    <a href="{$_url}reports/by-date" class="small-box-footer" style="color: #fc5130;">{Lang::T('View Reports')} <i
                                        class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                        <div class="card card-bd">
                            <div class="bg-warning card-border"></div>
                            <div class="card-body box-style">
                                <div class="media align-items-center col">
                                    <div class="inner media-body me-3">
                                        <h4 class="num-text text-black font-w200">{$_c['currency_code']}{number_format($imonth,0,$_c['dec_point'],$_c['thousands_sep'])}</h4>
                                        <p class="fs-14">{Lang::T('Income This Month')}</p>
                                    </div>
                                    <!--<div class="icon" style="color: #FFB930;">
                                        <i class="fa fa-chart-bar"></i>
                                    </div>-->
                                </div>
                                <div class="">
                                    <a href="{$_url}reports/by-period" class="small-box-footer" style="color: #fc5130;">{Lang::T('View Reports')} <i
                                    class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                        <div class="card card-bd">
                            <div class="bg-success card-border"></div>
                            <div class="card-body box-style">
                                <div class="media align-items-center col">
                                    <div class="inner media-body me-3">
                                        <h4 class="num-text text-black font-w200">{$u_act}/{$u_all}</h4>
                                        <p class="fs-14">{Lang::T('Users Active')}</p>
                                    </div>
                                    <div class="icon" style="color: #20F174;">
                                        <i class="fa fa-users"></i>
                                    </div>
                                </div>
                                <div class="">
                                    <a href="{$_url}plan/list" class="small-box-footer" style="color: #fc5130;">{Lang::T('View All')} <i
                                    class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                        <div class="card card-bd">
                            <div class="bg-info card-border"></div>
                            <div class="card-body box-style">
                                <div class="media align-items-center col">
                                    <div class="inner media-body me-3">
                                        <h4 class="num-text text-black font-w200">{$c_all}</h4>
                                        <p class="fs-14">{Lang::T('Total Users')}</p>
                                    </div>
                                    <div class="icon" style="color: #3ECDFF;">
                                        <i class="fa fa-users"></i>
                                    </div>
                                </div>
                                <div class="" >
                                    <a href="{$_url}customers/list" class="small-box-footer" style="color: #fc5130;">{Lang::T('View All')} <i
                                    class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- solid sales graph -->
                        {if $_c['hide_mrc'] != 'yes'}
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-th"></i>
                                    <h3 class="card-title">{Lang::T('Monthly Customers')}</h3>
                                    <div class="card-tools pull-right">
                                        
                                        <a href="{$_url}settings/app#hide_dashboard_content" class="btn bg-teal btn-xsm"><i
                                                class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- <div class="card-body text-center pb-0 px-2 pt-2">
                                    <div id="widgetChart1" class="widgetChart1 dashboard-chart"></div>
                                </div> -->
                                <div class="card-body border-radius-none">
                                    <canvas class="chart" id="chart" style="height: 200px;"></canvas>
                                </div>
                            </div>
                        {/if}
                    </div>
                    <div class="col-md-6">
                        <!-- solid sales graph -->
                        {if $_c['hide_tms'] != 'yes'}
                            <div class="card card-solid ">
                                <div class="card-header">
                                    <i class="fa fa-inbox"></i>
                                    <h3 class="card-title">{Lang::T('Total Monthly Sales')}</h3>
                                    <div class="card-tools pull-right">
                                        <a href="{$_url}settings/app#hide_dashboard_content" class="btn bg-teal btn-sm"><i
                                                class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- <div class="card-body pb-0 px-2 pt-2">
                                    <div id="chartTimeline" class="timeline-chart"></div>
                                </div> -->
                                <div class="card-body border-radius-none">
                                    <canvas id="salesChart" class="monthly-project-chart" style="height: 200px;"></canvas>
                                </div>
                            </div>
                        {/if}
                    </div>
                    <div class="col-md-12">
                        {if $_c['hide_uet'] != 'yes'}
                            <div class="card card-warning card-hovered project-stats table-responsive">
                                <div class="card-header">
                                    <h3 class="card-title">{Lang::T('Expired Users')}</h3></div>
                                <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>{Lang::T('Username')}</th>
                                                <th>{Lang::T('Created On')}</th>
                                                <th>{Lang::T('Expires On')}</th>
                                                <th>{Lang::T('Router')}</th>
                                                <th>{Lang::T('Package')}</th>
                                                <th>{Lang::T('Action')}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {foreach $expire as $expired}
                                                <tr>
                                                    <td><a href="{$_url}customers/viewu/{$expired['username']}">{$expired['username']}</a></td>
                                                    <td>{Lang::dateAndTimeFormat($expired['recharged_on'],$expired['recharged_time'])}
                                                    </td>
                                                    <td>{Lang::dateAndTimeFormat($expired['expiration'],$expired['time'])}
                                                    </td>
                                                    <td>{$expired['routers']}</td>
                                                    <td>{$expired['namebp']}</td>
                                                    <td>
                                                    <a href="{$_url}plan/recharge/{$expired['customer_id']}" id="{$expired['customer_id']}" style="margin: 0px;color:black;"
                                                        class="btn btn-warning btn-xs">{Lang::T('Recharge')}</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        {/foreach}
                                    </table>
                                </div>
                                &nbsp; {include file="pagination.tpl"}
                                </div>
                            </div>
                        {/if}
                    </div>
                    <div class="col-md-6">
                        {if $_c['disable_voucher'] != 'yes' && $stocks['unused']>0 || $stocks['used']>0}
                            {if $_c['hide_vs'] != 'yes'}
                                <div class="card card-primary card-hovered project-stats">
                                    <div class="card-header">Vouchers Stock</div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-condensed">
                                            <thead>
                                                <tr>
                                                    <th>{Lang::T('Plan Name')}</th>
                                                    <th>unused</th>
                                                    <th>used</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {foreach $plans as $stok}
                                                    <tr>
                                                        <td>{$stok['name_plan']}</td>
                                                        <td>{$stok['unused']}</td>
                                                        <td>{$stok['used']}</td>
                                                    </tr>
                                                </tbody>
                                            {/foreach}
                                            <tr>
                                                <td>Total</td>
                                                <td>{$stocks['unused']}</td>
                                                <td>{$stocks['used']}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            {/if}
                        {/if}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {if $_c['hide_aui'] != 'yes'}
                            <div class="card card-hovered activities">
                                <div class="card-header"><h3 class="card-title">{Lang::T('All Users Insights')}</h3></div>
                                <div class="card-body">
                                    <canvas id="userRechargesChart" style="height: 600px;"></canvas>
                                </div>
                            </div>
                        {/if}
                    </div>
                    <div class="col-md-6">
                        {if $_c['hide_al'] != 'yes'}
                            <div class="card card-info card-hovered activities" style="height: 600px;">
                                <div class="card-header"><a class="card-title" href="{$_url}logs">{Lang::T('Activity Log')}</a></div>
                                <div class="card-body">
                                    <div id="DZ_W_TimeLine" class="widget-timeline dz-scroll ps ps--active-y" style="height: 460px;">
                                        <ul class="timeline">
                                            {foreach $dlog as $dlogs}
                                                <li class="primary">
                                                    <div class="timeline-badge primary"></div>
                                                    <div class="timeline-panel text-muted">
                                                        <span class="point"></span>
                                                        <span class="time small text-muted">{Lang::timeElapsed($dlogs['date'],true)}</span>
                                                        <p>{$dlogs['description']}</p>
                                                    </div>
                                                </li>
                                            {/foreach}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        {/if}
                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
                <script type="text/javascript">
                    {if $_c['hide_mrc'] != 'yes'}
                        {literal}
                            document.addEventListener("DOMContentLoaded", function() {
                                var counts = JSON.parse('{/literal}{$monthlyRegistered|json_encode}{literal}');
                                var monthNames = [
                                    'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
                                ];
                                var labels = [];
                                var data = [];
                                for (var i = 1; i <= 12; i++) {
                                    var month = counts.find(count => count.date === i);
                                    labels.push(month ? monthNames[i - 1] : monthNames[i - 1].substring(0, 3));
                                    data.push(month ? month.count : 0);
                                }
                                var ctx = document.getElementById('chart').getContext('2d');
                                var chart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: labels,
                                        datasets: [{
                                            label: 'Registered Members',
                                            data: data,
                                            backgroundColor: '#fc5130',
                                            borderColor: '#fc5130',
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        responsive: true,
                                        scales: {
                                            x: {
                                                grid: {
                                                    display: false
                                                }
                                            },
                                            y: {
                                                beginAtZero: true,
                                                grid: {
                                                    color: 'rgba(0, 0, 0, 0.1)'
                                                }
                                            }
                                        }
                                    }
                                });
                            });
                        {/literal}
                    {/if}
                    {if $_c['hide_tmc'] != 'yes'}
                        {literal}
                            document.addEventListener("DOMContentLoaded", function() {
                                var monthlySales = JSON.parse('{/literal}{$monthlySales|json_encode}{literal}');
                                var monthNames = [
                                    'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
                                ];
                                var labels = [];
                                var data = [];
                                for (var i = 1; i <= 12; i++) {
                                    var month = findMonthData(monthlySales, i);
                                    labels.push(month ? monthNames[i - 1] : monthNames[i - 1].substring(0, 3));
                                    data.push(month ? month.totalSales : 0);
                                }
                                var ctx = document.getElementById('salesChart').getContext('2d');
                                var chart = new Chart(ctx, {
                                    type: 'bar',
                                    //type: 'radialBar',
                                    data: {
                                        labels: labels,
                                        datasets: [{
                                            label: 'Monthly Sales',
                                            data: data,
                                            backgroundColor: '#fc5130', // Customize the background color
                                            borderColor: '#fc5130', // Customize the border color
                                            borderWidth: 2
                                        }]
                                    },
                                    options: {
                                        responsive: true,
                                        scales: {
                                            x: {
                                                grid: {
                                                    display: false
                                                }
                                            },
                                            y: {
                                                beginAtZero: true,
                                                grid: {
                                                    color: 'rgba(0, 0, 0, 0.1)'
                                                }
                                            }
                                        }
                                    }
                                });
                            });
                            function findMonthData(monthlySales, month) {
                                for (var i = 0; i < monthlySales.length; i++) {
                                    if (monthlySales[i].month === month) {
                                        return monthlySales[i];
                                    }
                                }
                                return null;
                            }
                        {/literal}
                    {/if}
                    {if $_c['hide_aui'] != 'yes'}
                        {literal}
                            document.addEventListener("DOMContentLoaded", function() {
                                // Get the data from PHP and assign it to JavaScript variables
                                var u_act = '{/literal}{$u_act}{literal}';
                                var c_all = '{/literal}{$c_all}{literal}';
                                var u_all = '{/literal}{$u_all}{literal}';
                                //lets calculate the inactive users as reported
                                var expired = u_all - u_act;
                                var inactive = c_all - u_all;
                                // Create the chart data
                                var data = {
                                    labels: ['Active Users', 'Expired Users', 'Inactive Users'],
                                    datasets: [{
                                        label: 'User Recharges',
                                        data: [parseInt(u_act), parseInt(expired), parseInt(inactive)],
                                        backgroundColor: ['rgba(4, 191, 13)', 'rgba(191, 35, 4)', 'rgba(0, 0, 255, 0.5'],
                                        borderColor: ['rgba(0, 255, 0, 1)', 'rgba(255, 99, 132, 1)', 'rgba(0, 0, 255, 0.7'],
                                        borderWidth: 1
                                    }]
                                };
                                // Create chart options
                                var options = {
                                    responsive: true,
                                    aspectRatio: 1,
                                    plugins: {
                                        legend: {
                                            position: 'bottom',
                                            labels: {
                                                boxWidth: 15
                                            }
                                        }
                                    }
                                };
                                // Get the canvas element and create the chart
                                var ctx = document.getElementById('userRechargesChart').getContext('2d');
                                var chart = new Chart(ctx, {
                                    type: 'pie',
                                    data: data,
                                    options: options
                                });
                            });
                        {/literal}
                    {/if}
                </script>
                <script>
                //     window.addEventListener('DOMContentLoaded', function() {
                //         $.getJSON("./version.json?" + Math.random(), function(data) {
                //             var localVersion = data.version;
                //             $('#version').html('Version: ' + localVersion);
                //             $.getJSON(
                //                 "https://raw.githubusercontent.com/hotspotbilling/phpnuxbill/master/version.json?" +
                //                 Math
                //                 .random(),
                //                 function(data) {
                //                     var latestVersion = data.version;
                //                     if (localVersion !== latestVersion) {
                //                         $('#version').html('Latest Version: ' + latestVersion);
                //                     }
                //                 });
                //         });
                //     });
                </script>
  {include file="sections/footer.tpl"}