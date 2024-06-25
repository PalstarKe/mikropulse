{include file="sections/header.tpl"}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> {literal} <style>
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
    </style> {/literal} 
<div class="container-fluid">
<!--<div class="box-body table-responsive no-padding">-->
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">Your Connected Routers</div>
            <div class="card-body">
                <form class="form-horizontal" method="post" role="form" action="{$_url}plugin/mikrotik_ui">
                  <ul class="nav nav-tabs"> {foreach $routers as $r} <li role="presentation" {if $r['id']==$router}class="active nav-item" {/if}>
                      <a class=" btn btn-primary waves-effect waves-light" href="{$_url}plugin/mikrotik_ui/{$r['id']}">{$r['name']}</a>
                    </li> {/foreach} </ul>
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
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
                <script>
                    var $j = jQuery.noConflict(); // Use $j as an alternative to $
                    function fetchData() {
                        $j.ajax({
                            url: '{$_url}plugin/mikrotik_get_traffic/{$router}',
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
                            url: '{$_url}plugin/mikrotik_get_ppp_online_users/{$router}',
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
                        url: '{$_url}plugin/mikrotik_get_ppp_users/{$router}',
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
                </script>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            </div>
        </div>
    </div>
</div>
{include file="sections/footer.tpl"}