<?php
/* Smarty version 4.3.1, created on 2024-06-25 02:40:38
  from '/home/codevibe/azerin.codevibeisp.co.ke/system/plugin/ui/monitor_interface.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_667a03f6ca78d1_68718950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '381419a5b561770fc4374961ba9f9a3c1b1aa251' => 
    array (
      0 => '/home/codevibe/azerin.codevibeisp.co.ke/system/plugin/ui/monitor_interface.tpl',
      1 => 1719272427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_667a03f6ca78d1_68718950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">Routers</div>
                <div class="card-body">
                    <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/mikrotik_monitor_ui">
                      <ul class="nav nav-tabs btn"> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['routers']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?> <li role="presentation" <?php if ($_smarty_tpl->tpl_vars['r']->value['id'] == $_smarty_tpl->tpl_vars['router']->value) {?>class="active" <?php }?>>
                          <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/mikrotik_monitor_ui/<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['name'];?>
</a>
                        </li> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> </ul>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
          <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="interface">Interface</label>
              </div>
              <div class="table-responsive mt-4">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        <select name="interface" id="interface" class="form-control custom-select" onchange="updateTrafficValues()">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['interfaces']->value, 'interface');
$_smarty_tpl->tpl_vars['interface']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['interface']->value) {
$_smarty_tpl->tpl_vars['interface']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['interface']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['interface']->value;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                      </th>
                      <th id="tabletx"><strong>TX:</strong> 0 B</th>
                      <th id="tablerx"><strong>RX:</strong> 0 B</th>
                    </tr>
                  </thead>
                </table>
              </div>
              <div id="chart" class="mt-3" style="width: auto; height: 500px;"></div>
            </div>
          </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/apexcharts"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  var chart;
  var chartData = {
    txData: [],
    rxData: []
  };

function createChart() {
  var options = {
    chart: {
      height: 350,
      type: 'area',
      animations: {
        enabled: true,
        easing: 'linear',
        speed: 200,
        animateGradually: {
          enabled: true,
          delay: 150
        },
        dynamicAnimation: {
          enabled: true,
          speed: 200
        }
      },
      events: {
        mounted: function(chartContext, config) {
          // Initially load data and set up refresh interval
          updateTrafficValues();
          setInterval(updateTrafficValues, 3000);
        }
      }
    },
    stroke: {
      curve: 'smooth'
    },
    series: [{
      name: 'Upload',
      data: chartData.txData
    }, {
      name: 'Download',
      data: chartData.rxData
    }],
    xaxis: {
      type: 'datetime',
      labels: {
        formatter: function(value) {
          return new Date(value).toLocaleTimeString();
        }
      }
    },
    yaxis: {
      title: {
        text: 'Lalu Lintas Langsung'
      },
      labels: {
        formatter: function(value) {
          return formatBytes(value);
        }
      }
    },
    tooltip: {
      x: {
        format: 'HH:mm:ss'
      },
      y: {
        formatter: function(value) {
          return formatBytes(value) + 'ps';
        }
      }
    },
    dataLabels: {
      enabled: true,
      formatter: function(value) {
        return formatBytes(value);
      }
    }
  };
  chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();
}

function formatBytes(bytes) {
  if (bytes === 0) {
    return '0 B';
  }
  var k = 1024;
  var sizes = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
  var i = Math.floor(Math.log(bytes) / Math.log(k));
  var formattedValue = parseFloat((bytes / Math.pow(k, i)).toFixed(2));
  return formattedValue + ' ' + sizes[i];
}

function updateTrafficValues() {
  var interface = $('#interface').val();
  $('#selectedInterface').text(interface);
  $.ajax({
    url: '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/monitor_traffic/<?php echo $_smarty_tpl->tpl_vars['router']->value;?>
',
    dataType: 'json',
    data: {
      interface: interface
    },
    success: function(data) {
      var timestamp = new Date().getTime();
      var txData = data.rows.tx;
      var rxData = data.rows.rx;
      if (txData.length > 0 && rxData.length > 0) {
        var TX = parseInt(txData[0]);
        var RX = parseInt(rxData[0]);
        chartData.txData.push({ x: timestamp, y: TX });
        chartData.rxData.push({ x: timestamp, y: RX });
        var maxDataPoints = 10;
        if (chartData.txData.length > maxDataPoints) {
          chartData.txData.shift();
          chartData.rxData.shift();
        }
        chart.updateSeries([{
          name: 'Upload',
          data: chartData.txData
        }, {
          name: 'Download',
          data: chartData.rxData
        }]);
        document.getElementById("tabletx").textContent = formatBytes(TX);
        document.getElementById("tablerx").textContent = formatBytes(RX);
      } else {
        document.getElementById("tabletx").textContent = "0";
        document.getElementById("tablerx").textContent = "0";
      }
    },
    error: function(XMLHttpRequest, textStatus, errorThrown) {
      console.error("Status: " + textStatus + " request: " + XMLHttpRequest);
      console.error("Error: " + errorThrown);
    }
  });
}

createChart(); // Create the chart on page load
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
