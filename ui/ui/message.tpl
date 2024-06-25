{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="card card-primary card-hovered card-stacked mb30">
                            <div class="card-header">
                                <h3 class="card-title">{Lang::T('Send Personal Message')}</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" method="post" role="form" action="{$_url}message/send-post">
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Customer')}</label>
                                        <div class="col-md-6">
                                            <select {if $cust}{else}id="personSelect" {/if} class="form-select" style="height: 52px; background-color: white;"
                                                name="id_customer" style="width: 100%"
                                                data-placeholder="{Lang::T('Select a customer')}...">
                                                {if $cust}
                                                <option value="{$cust['id']}">{$cust['username']} &bull; {$cust['fullname']} &bull;
                                                    {$cust['email']}</option>
                                                {/if}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Send Via')}</label>
                                        <div class="col-md-6">
                                            <select class="form-select" style="height: 52px; background-color: white;" name="via" id="via">
                                                <option value="sms" selected> {Lang::T('SMS')}</option>
                                                <option value="wa"> {Lang::T('WhatsApp')}</option>
                                                <option value="both"> {Lang::T('SMS and WhatsApp')}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Message')}</label>
                                        <div class="col-md-6">
                                            <textarea class="form-control" id="message" name="message"
                                                placeholder="{Lang::T('Compose your message...')}" rows="5"></textarea>
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
                                                <button class="btn btn-success mb-3" type="submit">{Lang::T('Send Message')}</button>
                                                <a class="btn btn-outline-primary href="{$_url}dashboard" class="btn btn-default">{Lang::T('Cancel')}</a>
                                            </div>
                                        </div>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{include file="sections/footer.tpl"}