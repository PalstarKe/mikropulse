<?php
/* Smarty version 4.3.1, created on 2024-06-25 03:57:31
  from '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_667a15fb7c3e27_76562229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e78bae0e4f404352b311352e1d5d5533b5e26013' => 
    array (
      0 => '/home/codevibe/azerin.codevibeisp.co.ke/ui/ui/dashboard.tpl',
      1 => 1719277048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:pagination.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_667a15fb7c3e27_76562229 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
                                        <h4 class=" num-text text-black font-w200"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];
echo number_format($_smarty_tpl->tpl_vars['iday']->value,0,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</h4>
                                        <p class="fs-14"><?php echo Lang::T('Income Today');?>
</p>
                                    </div>
                                    <!--<div class="icon" style="color: #864AD1;">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div> -->
                                </div>
                                <div class="">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/by-date" class="small-box-footer" style="color: #fc5130;"><?php echo Lang::T('View Reports');?>
 <i
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
                                        <h4 class="num-text text-black font-w200"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];
echo number_format($_smarty_tpl->tpl_vars['imonth']->value,0,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</h4>
                                        <p class="fs-14"><?php echo Lang::T('Income This Month');?>
</p>
                                    </div>
                                    <!--<div class="icon" style="color: #FFB930;">
                                        <i class="fa fa-chart-bar"></i>
                                    </div>-->
                                </div>
                                <div class="">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/by-period" class="small-box-footer" style="color: #fc5130;"><?php echo Lang::T('View Reports');?>
 <i
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
                                        <h4 class="num-text text-black font-w200"><?php echo $_smarty_tpl->tpl_vars['u_act']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['u_all']->value;?>
</h4>
                                        <p class="fs-14"><?php echo Lang::T('Users Active');?>
</p>
                                    </div>
                                    <div class="icon" style="color: #20F174;">
                                        <i class="fa fa-users"></i>
                                    </div>
                                </div>
                                <div class="">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plan/list" class="small-box-footer" style="color: #fc5130;"><?php echo Lang::T('View All');?>
 <i
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
                                        <h4 class="num-text text-black font-w200"><?php echo $_smarty_tpl->tpl_vars['c_all']->value;?>
</h4>
                                        <p class="fs-14"><?php echo Lang::T('Total Users');?>
</p>
                                    </div>
                                    <div class="icon" style="color: #3ECDFF;">
                                        <i class="fa fa-users"></i>
                                    </div>
                                </div>
                                <div class="" >
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list" class="small-box-footer" style="color: #fc5130;"><?php echo Lang::T('View All');?>
 <i
                                    class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- solid sales graph -->
                        <?php if ($_smarty_tpl->tpl_vars['_c']->value['hide_mrc'] != 'yes') {?>
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-th"></i>
                                    <h3 class="card-title"><?php echo Lang::T('Monthly Customers');?>
</h3>
                                    <div class="card-tools pull-right">
                                        
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app#hide_dashboard_content" class="btn bg-teal btn-xsm"><i
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
                        <?php }?>
                    </div>
                    <div class="col-md-6">
                        <!-- solid sales graph -->
                        <?php if ($_smarty_tpl->tpl_vars['_c']->value['hide_tms'] != 'yes') {?>
                            <div class="card card-solid ">
                                <div class="card-header">
                                    <i class="fa fa-inbox"></i>
                                    <h3 class="card-title"><?php echo Lang::T('Total Monthly Sales');?>
</h3>
                                    <div class="card-tools pull-right">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app#hide_dashboard_content" class="btn bg-teal btn-sm"><i
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
                        <?php }?>
                    </div>
                    <div class="col-md-12">
                        <?php if ($_smarty_tpl->tpl_vars['_c']->value['hide_uet'] != 'yes') {?>
                            <div class="card card-warning card-hovered project-stats table-responsive">
                                <div class="card-header">
                                    <h3 class="card-title"><?php echo Lang::T('Expired Users');?>
</h3></div>
                                <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th><?php echo Lang::T('Username');?>
</th>
                                                <th><?php echo Lang::T('Created On');?>
</th>
                                                <th><?php echo Lang::T('Expires On');?>
</th>
                                                <th><?php echo Lang::T('Router');?>
</th>
                                                <th><?php echo Lang::T('Package');?>
</th>
                                                <th><?php echo Lang::T('Action');?>
</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['expire']->value, 'expired');
$_smarty_tpl->tpl_vars['expired']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['expired']->value) {
$_smarty_tpl->tpl_vars['expired']->do_else = false;
?>
                                                <tr>
                                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/viewu/<?php echo $_smarty_tpl->tpl_vars['expired']->value['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['expired']->value['username'];?>
</a></td>
                                                    <td><?php echo Lang::dateAndTimeFormat($_smarty_tpl->tpl_vars['expired']->value['recharged_on'],$_smarty_tpl->tpl_vars['expired']->value['recharged_time']);?>

                                                    </td>
                                                    <td><?php echo Lang::dateAndTimeFormat($_smarty_tpl->tpl_vars['expired']->value['expiration'],$_smarty_tpl->tpl_vars['expired']->value['time']);?>

                                                    </td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['expired']->value['routers'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['expired']->value['namebp'];?>
</td>
                                                    <td>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plan/recharge/<?php echo $_smarty_tpl->tpl_vars['expired']->value['customer_id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['expired']->value['customer_id'];?>
" style="margin: 0px;color:black;"
                                                        class="btn btn-warning btn-xs"><?php echo Lang::T('Recharge');?>
</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </table>
                                </div>
                                &nbsp; <?php $_smarty_tpl->_subTemplateRender("file:pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <div class="col-md-6">
                        <?php if ($_smarty_tpl->tpl_vars['_c']->value['disable_voucher'] != 'yes' && $_smarty_tpl->tpl_vars['stocks']->value['unused'] > 0 || $_smarty_tpl->tpl_vars['stocks']->value['used'] > 0) {?>
                            <?php if ($_smarty_tpl->tpl_vars['_c']->value['hide_vs'] != 'yes') {?>
                                <div class="card card-primary card-hovered project-stats">
                                    <div class="card-header">Vouchers Stock</div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-condensed">
                                            <thead>
                                                <tr>
                                                    <th><?php echo Lang::T('Plan Name');?>
</th>
                                                    <th>unused</th>
                                                    <th>used</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plans']->value, 'stok');
$_smarty_tpl->tpl_vars['stok']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stok']->value) {
$_smarty_tpl->tpl_vars['stok']->do_else = false;
?>
                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['stok']->value['name_plan'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['stok']->value['unused'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['stok']->value['used'];?>
</td>
                                                    </tr>
                                                </tbody>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <tr>
                                                <td>Total</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['stocks']->value['unused'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['stocks']->value['used'];?>
</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            <?php }?>
                        <?php }?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?php if ($_smarty_tpl->tpl_vars['_c']->value['hide_aui'] != 'yes') {?>
                            <div class="card card-hovered activities">
                                <div class="card-header"><h3 class="card-title"><?php echo Lang::T('All Users Insights');?>
</h3></div>
                                <div class="card-body">
                                    <canvas id="userRechargesChart" style="height: 600px;"></canvas>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <div class="col-md-6">
                        <?php if ($_smarty_tpl->tpl_vars['_c']->value['hide_al'] != 'yes') {?>
                            <div class="card card-info card-hovered activities" style="height: 600px;">
                                <div class="card-header"><a class="card-title" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logs"><?php echo Lang::T('Activity Log');?>
</a></div>
                                <div class="card-body">
                                    <div id="DZ_W_TimeLine" class="widget-timeline dz-scroll ps ps--active-y" style="height: 460px;">
                                        <ul class="timeline">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dlog']->value, 'dlogs');
$_smarty_tpl->tpl_vars['dlogs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dlogs']->value) {
$_smarty_tpl->tpl_vars['dlogs']->do_else = false;
?>
                                                <li class="primary">
                                                    <div class="timeline-badge primary"></div>
                                                    <div class="timeline-panel text-muted">
                                                        <span class="point"></span>
                                                        <span class="time small text-muted"><?php echo Lang::timeElapsed($_smarty_tpl->tpl_vars['dlogs']->value['date'],true);?>
</span>
                                                        <p><?php echo $_smarty_tpl->tpl_vars['dlogs']->value['description'];?>
</p>
                                                    </div>
                                                </li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
                <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
 type="text/javascript">
                    <?php if ($_smarty_tpl->tpl_vars['_c']->value['hide_mrc'] != 'yes') {?>
                        
                            document.addEventListener("DOMContentLoaded", function() {
                                var counts = JSON.parse('<?php echo json_encode($_smarty_tpl->tpl_vars['monthlyRegistered']->value);?>
');
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
                        
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['_c']->value['hide_tmc'] != 'yes') {?>
                        
                            document.addEventListener("DOMContentLoaded", function() {
                                var monthlySales = JSON.parse('<?php echo json_encode($_smarty_tpl->tpl_vars['monthlySales']->value);?>
');
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
                        
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['_c']->value['hide_aui'] != 'yes') {?>
                        
                            document.addEventListener("DOMContentLoaded", function() {
                                // Get the data from PHP and assign it to JavaScript variables
                                var u_act = '<?php echo $_smarty_tpl->tpl_vars['u_act']->value;?>
';
                                var c_all = '<?php echo $_smarty_tpl->tpl_vars['c_all']->value;?>
';
                                var u_all = '<?php echo $_smarty_tpl->tpl_vars['u_all']->value;?>
';
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
                        
                    <?php }?>
                <?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
>
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
                <?php echo '</script'; ?>
>
  <?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
