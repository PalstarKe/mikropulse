<?php
/* Smarty version 4.3.1, created on 2024-06-24 23:08:02
  from '/home/codevibe/azerin.codevibeisp.co.ke/system/plugin/ui/pppoe-users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6679d222d8da63_43520188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faaf4c3103aa8de2f557a5deb0fc808433a98270' => 
    array (
      0 => '/home/codevibe/azerin.codevibeisp.co.ke/system/plugin/ui/pppoe-users.tpl',
      1 => 1719108363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6679d222d8da63_43520188 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">  <style>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
      table {
        border-collapse: collapse;
        width: 100%;
      }
    
      th,
      td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
      }
    
      th.custom-class {
        background-color: #f2f2f2;
        color: #000;
        font-weight: bold;
      }
    
      tr.even-row {
        background-color: #f2f2f2;
      }
    
      tr.custom-class {
        color: blue;
        font-weight: bold;
      }
    
      #ppp-table th,
      #ppp-table td {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        width: 100px;
      }
       #pp-table th,
      #pp-table td {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        width: 100px;
      }
    </style>  
<div class="container-fluid">
<!--<div class="box-body table-responsive no-padding">-->
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">Your Connected Routers</div>
            <div class="card-body">
                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/mikrotik_ui">
                  <ul class="nav nav-tabs"> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['routers']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?> <li role="presentation" <?php if ($_smarty_tpl->tpl_vars['r']->value['id'] == $_smarty_tpl->tpl_vars['router']->value) {?>class="active nav-item" <?php }?>>
                      <a class=" btn btn-primary waves-effect waves-light" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/mikrotik_ui/<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['name'];?>
</a>
                    </li> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> </ul>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link  active" href="#tab_2" data-toggle="tab">PPPoE Clients</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab_3" data-toggle="tab">PPPoE Online Clients</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                          <div style="overflow-x:auto;" class="tab-pane" id="tab_3">
                            <div class="box-body no-padding" id="traffic-panel">
                              <table class="display" id="ppp-table">
                                <thead>
                                  <tr>
                                    <th>Username</th>
                                    <th>IP Address</th>
                                    <th>Uptime</th>
                                    <th>Service</th>
                                    <th>Caller ID</th>
                                    <th>RX (bytes In)</th>
                                    <th>TX (bytes Out)</th>
                                  </tr>
                                </thead>
                              </table>
                            </div>
                          </div>
                          <div style="overflow-x:auto;" class="tab-pane active" id="tab_2">
                            <div class="box-body no-padding" id="traffic-panel">
                              <table class="display" id="pp-table">
                                <thead>
                                  <tr>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Service</th>
                                    <th>Caller ID</th>
                                    <th>Profile</th>
                                    <th>Local Address</th>
                                    <th>Remote Address</th>
                                  </tr>
                                </thead>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
>
                    var $j = jQuery.noConflict(); // Use $j as an alternative to $
                    function fetchData() {
                        $j.ajax({
                            url: '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/mikrotik_get_traffic/<?php echo $_smarty_tpl->tpl_vars['router']->value;?>
',
                            method: 'GET',
                            success: function(response) {
                              // Update the DataTable with the fetched data
                              $j('#traffic-table').DataTable().clear().rows.add(response).draw();
                            },
                            error: function(xhr, error, thrown) {
                              console.log('AJAX error:', error);
                            }
                      });
                    }

                    function fetchUserListData() {
                        var table = $j('#ppp-table').DataTable({
                            columns: [{
                              data: 'username'
                            }, {
                              data: 'address'
                            }, {
                              data: 'uptime'
                            }, {
                              data: 'service'
                            }, {
                              data: 'caller_id'
                            }, {
                              data: 'bytes_in'
                            }, {
                              data: 'bytes_out'
                            }, ],
                            // Add any additional options or configurations as needed
                        });
                        $j.ajax({
                            url: '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/mikrotik_get_ppp_online_users/<?php echo $_smarty_tpl->tpl_vars['router']->value;?>
',
                            method: 'GET',
                            success: function(response) {
                                // Update the DataTable with the fetched user list data
                                table.clear().rows.add(response).draw();
                            },
                            error: function(xhr, error, thrown) {
                              console.log('AJAX error:', error);
                            },
                        });
                    }
                    function fetchUserData() {
                      var table = $j('#pp-table').DataTable({
                        columns: [{
                          data: 'username'
                        }, {
                          data: 'password'
                        }, {
                          data: 'service'
                        }, {
                          data: 'caller_id'
                        }, {
                          data: 'profile'
                        }, {
                          data: 'local-address'
                        }, {
                          data: 'remote-address'
                        }, ],
                        // Add any additional options or configurations as needed
                      });
                      $j.ajax({
                        url: '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/mikrotik_get_ppp_users/<?php echo $_smarty_tpl->tpl_vars['router']->value;?>
',
                        method: 'GET',
                        success: function(response) {
                          // Update the DataTable with the fetched user list data
                          table.clear().rows.add(response).draw();
                        },
                        error: function(xhr, error, thrown) {
                          console.log('AJAX error:', error);
                        },
                      });
                    }
                    // Function to disconnect a user
                    function disconnectUser(username) {
                      // Perform the disconnect action for the specified user
                      // You can implement the functionality to disconnect the user here
                      console.log('Disconnect user:', username);
                    }
                    $j(document).ready(function() {
                      $j('#traffic-table').DataTable({
                        'columns': [{
                          'data': 'name'
                        }, {
                          'data': 'tx'
                        }, {
                          'data': 'rx'
                        }, {
                          'data': 'status'
                        }],
                        'error': function(xhr, error, thrown) {
                          console.log('DataTables error:', error);
                        }
                      });
                      // Fetch data initially
                      //fetchSignalListData();
                      fetchData();
                      fetchUserData()
                      fetchUserListData();
                      // Refresh the user list data every 5 seconds
                      //  setInterval(fetchUserListData, 5000);
                      // Refresh the data every 5 seconds
                      //  setInterval(fetchData, 5000);
                    });
                <?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/chart.js"><?php echo '</script'; ?>
>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
