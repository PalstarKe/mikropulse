{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="card card-primary card-hovered card-stacked mb30">
                            <div class="card-header">
                                <h3 class="card-title">{Lang::T('Add Vouchers')}</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" method="post" role="form" action="{$_url}plan/voucher-post">
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Type')}</label>
                                        <div class="col-md-6">
                                            <input type="radio" id="Hot" name="type" value="Hotspot"> {Lang::T('Hotspot Plans')}
                                            <input type="radio" id="POE" name="type" value="PPPOE"> {Lang::T('PPPOE Plans')}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Routers')}</label>
                                        <div class="col-md-6">
                                            <select id="server" name="server" class="form-select" style="height: 52px; background-color: white;">
                                                <option value=''>{Lang::T('Select Routers')}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Service Plan')}</label>
                                        <div class="col-md-6">
                                            <select id="plan" name="plan" class="form-select select2" style="height: 52px; background-color: white;">
                                                <option value=''>{Lang::T('Select Plans')}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Number of Vouchers')}</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="numbervoucher" value="1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Voucher Format')}</label>
                                        <div class="col-md-6">
                                            <select name="voucher_format" id="voucher_format" class="form-select" style="height: 52px; background-color: white;">
                                                <option value="up" {if $_c['voucher_format'] == 'up'}selected="selected" {/if}>UPPERCASE
                                                </option>
                                                <option value="low" {if $_c['voucher_format'] == 'low'}selected="selected" {/if}>
                                                    lowercase
                                                </option>
                                                <option value="rand" {if $_c['voucher_format'] == 'rand'}selected="selected" {/if}>
                                                    RaNdoM
                                                </option>
                                            </select>
                                        </div>
                                        <p class="help-block col-md-4">UPPERCASE lowercase RaNdoM</p>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Voucher Prefix')}</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="prefix" placeholder="NUX-" value="{$_c['voucher_prefix']}">
                                        </div>
                                        <p class="help-block col-md-4">NUX-VoUCHeRCOdE</p>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Length Code')}</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="lengthcode" value="12">
                                        </div>
                                    </div>
                                    <center>
                                        <div class="form-group row">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-success"
                                                    type="submit">{Lang::T('Generate')}</button>
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