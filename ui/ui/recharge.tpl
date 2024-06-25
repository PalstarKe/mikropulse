{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="card card-primary card-hovered card-stacked mb30">
                            <div class="card-header">
                                <h3 class="card-title">{Lang::T('Recharge Account')}</h3></div>
                            <div class="card-body">
                                <form class="form-horizontal" method="post" role="form" action="{$_url}plan/recharge-confirm">
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Select Account')}</label>
                                        <div class="col-md-6">
                                            <select {if $cust}{else}id="personSelect"{/if} class="form-select select2" style="height: 52px; background-color: white;"
                                                name="id_customer" style="width: 100%" data-placeholder="{Lang::T('Select a customer')}...">
                                                {if $cust}
                                                    <option value="{$cust['id']}">{$cust['username']} &bull; {$cust['fullname']} &bull; {$cust['email']}</option>
                                                {/if}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Type')}</label>
                                        <div class="col-md-6">
                                            <label><input type="radio" id="Hot" name="type" value="Hotspot"> {Lang::T('Hotspot Plans')}</label>
                                            <label><input type="radio" id="POE" name="type" value="PPPOE"> {Lang::T('PPPOE Plans')}</label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Routers')}</label>
                                        <div class="col-md-6">
                                            <select id="server" data-type="server" name="server" class="form-control select2" style="height: 52px; background-color: white;">
                                                <option value=''>{Lang::T('Select Routers')}</option>
                                            </select>
                                        </div>
                                    </div>
                
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Service Plan')}</label>
                                        <div class="col-md-6">
                                            <select id="plan" name="plan" class="form-control select2" style="height: 52px; background-color: white;">
                                                <option value=''>{Lang::T('Select Plans')}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Using')}</label>
                                        <div class="col-md-6">
                                            <select name="using" class="form-control select2" style="height: 52px; background-color: white;">
                                                <option value="cash">{Lang::T('Cash')}</option>
                                                {if $_c['enable_balance'] eq 'yes'}
                                                    <option value="balance">{Lang::T('Customer Balance')}</option>
                                                {/if}
                                                <option value="zero">{$_c['currency_code']} 0</option>
                                            </select>
                                        </div>
                                        <p class="help-block col-md-4">Postpaid Recharge for the first time use {$_c['currency_code']} 0</p>
                                    </div>
                                    <center>
                                        <div class="form-group row">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-success mb-3"
                                                    type="submit">{Lang::T('Recharge')}</button>
                                                Or <a class="btn btn-outline-primary href="{$_url}customers/list">{Lang::T('Cancel')}</a>
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