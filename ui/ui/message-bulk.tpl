{include file="sections/header.tpl"}
            <div class="container-fluid">
                <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="card card-primary card-hovered card-stacked mb30">
                            <div class="card-header">
                                <h3  class="card-title">{Lang::T('Send Bulk Message')}</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" method="post" role="form" id="bulkMessageForm" action="">
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Group')}</label>
                                        <div class="col-md-6">
                                            <select class="form-select" style="height: 52px; background-color: white;" name="group" id="group">
                                                <option value="all" selected>{Lang::T('All Customers')}</option>
                                                <option value="new">{Lang::T('New Customers')}</option>
                                                <option value="expired">{Lang::T('Expired Customers')}</option>
                                                <option value="active">{Lang::T('Active Customers')}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Send Via')}</label>
                                        <div class="col-md-6">
                                            <select class="form-select" style="height: 52px; background-color: white;" name="via" id="via">
                                                <option value="sms" selected>{Lang::T('SMS')}</option>
                                                <option value="wa">{Lang::T('WhatsApp')}</option>
                                                <option value="both">{Lang::T('SMS and WhatsApp')}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Message per time')}</label>
                                        <div class="col-md-6">
                                            <select class="form-select" style="height: 52px; background-color: white;" name="batch" id="batch">
                                                <option value="5">{Lang::T('5 Messages')}</option>
                                                <option value="10" selected>{Lang::T('10 Messages')}</option>
                                                <option value="15">{Lang::T('15 Messages')}</option>
                                                <option value="20">{Lang::T('20 Messages')}</option>
                                                <option value="20">{Lang::T('30 Messages')}</option>
                                                <option value="20">{Lang::T('40 Messages')}</option>
                                                <option value="20">{Lang::T('50 Messages')}</option>
                                                <option value="20">{Lang::T('60 Messages')}</option>
                                            </select>{Lang::T('Use 20 and above if you are sending to all customers to avoid server time out')}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Delay')}</label>
                                        <div class="col-md-6">
                                            <select class="form-select" style="height: 52px; background-color: white;" name="delay" id="delay">
                                                <option value="0" selected>{Lang::T('No Delay')}</option>
                                                <option value="5">{Lang::T('5 Seconds')}</option>
                                                <option value="10">{Lang::T('10 Seconds')}</option>
                                                <option value="15">{Lang::T('15 Seconds')}</option>
                                                <option value="20">{Lang::T('20 Seconds')}</option>
                                            </select>{Lang::T('Use at least 5 secs if you are sending to all customers to avoid being banned by your message provider')}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Message')}</label>
                                        <div class="col-md-6">
                                            <textarea class="form-control" id="message" name="message"
                                                placeholder="{Lang::T('Compose your message...')}" rows="5"></textarea>
                                            <input name="test" type="checkcard"> {Lang::T('Testing [if checked no real message is sent]')}
                                        </div>
                                        <p class="help-block col-md-4">
                                            {Lang::T('Use placeholders:')}
                                            <br>
                                            <b>[[name]]</b> - {Lang::T('Customer Name')}
                                            <br>
                                            <b>[[user_name]]</b> - {Lang::T('Customer Username')}
                                            <br>
                                            <b>[[phone]]</b> - {Lang::T('Customer Phone')}
                                            <br>
                                            <b>[[company_name]]</b> - {Lang::T('Your Company Name')}
                                        </p>
                                    </div>
                                    <center>
                                        <div class="form-group row">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-success mb-3" type="submit" name=send value=now>
                                                    {Lang::T('Send Message')}</button>
                                                <a class="btn btn-outline-primary" href="{$_url}dashboard" class="btn btn-default">{Lang::T('Cancel')}</a>
                                            </div>
                                        </div>
                                    </center>
                                </form>
                
                            </div>
                        </div>
                    </div>
                
                    {if $batchStatus}
                    <p><span class="label label-success">Total SMS Sent: {$totalSMSSent}</span> <span class="label label-danger">Total SMS
                            Failed: {$totalSMSFailed}</span> <span class="label label-success">Total WhatsApp Sent:
                            {$totalWhatsappSent}</span> <span class="label label-danger">Total WhatsApp Failed:
                            {$totalWhatsappFailed}</span></p>
                    {/if}
                    <div class="col-sm-12 col-md-12">
                        <div class="card card-primary card-hovered card-stacked mb30">
                            <div class="card-header">
                                <h3 class="card-title">Message Results</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="table-responsive">
                                <table id="messageResultsTable" class="table table-bordered table-striped table-condensed table-hover border-primary">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {foreach $batchStatus as $customer}
                                        <tr>
                                            <td>{$customer.name}</td>
                                            <td>{$customer.phone}</td>
                                            <td>{$customer.message}</td>
                                            <td>{$customer.status}</td>
                                        </tr>
                                        {/foreach}
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.card -->
                </div>

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
                <script>
                    var $j = jQuery.noConflict();

                    $j(document).ready(function () {
                        $j('#messageResultsTable').DataTable();
                    });
                </script>
            </div>
{include file="sections/footer.tpl"}