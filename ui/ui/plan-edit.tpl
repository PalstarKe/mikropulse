{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Plan</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" method="post" role="form" action="{$_url}plan/edit-post">
                                    <input type="hidden" name="id" value="{$d['id']}">
                                    <div class="form-group row">
                                        <label class="col-md-4 control-label">{Lang::T('Select Account')}</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="username" name="username"
                                                value="{$d['username']}" readonly>
                                        </div>
                                    </div>
                
                                    <div class="form-group row">
                                        <label class="col-md-4 control-label">{Lang::T('Service Plan')}</label>
                                        <div class="col-md-6">
                                            <select id="id_plan" name="id_plan" class="form-select" style="height: 52px; background-color: white;">
                                                {foreach $p as $ps}
                                                    <option value="{$ps['id']}" {if $d['plan_id'] eq $ps['id']} selected {/if}>
                                                    {if $ps['enabled'] neq 1}DISABLED PLAN &bull; {/if}
                                                    {if $ps['is_radius']=='1'}Radius{else}{$ps['routers']}{/if} &bull; {$ps['name_plan']}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 control-label">{Lang::T('Created On')}</label>
                                        <div class="col-md-4 mb-2">
                                            <input type="date" class="form-control" name="expiration" readonly
                                                value="{$d['recharged_on']}">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control" placeholder="00:00:00" readonly
                                                value="{$d['recharged_time']}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 control-label">{Lang::T('Expires On')}</label>
                                        <div class="col-md-4 mb-2">
                                            <input type="date" class="form-control" id="expiration" name="expiration"
                                                value="{$d['expiration']}">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control" id="time" name="time" placeholder="00:00:00"
                                                value="{$d['time']}">
                                        </div>
                                    </div>
                                    <center>
                                        <div class="form-group row">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-success mb-3"
                                                    type="submit">{Lang::T('Edit')}</button>
                                                Or <a href="{$_url}plan/list" class="btn btn-outline-primary">{Lang::T('Cancel')}</a>
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