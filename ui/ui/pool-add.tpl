{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="card card-primary card-hovered card-stacked mb30">
                            <div class="card-header">
                                <h3 class="card-title">{Lang::T('Add Pool')}</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" method="post" role="form" action="{$_url}pool/add-post" >
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Name Pool')}</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Range IP')}</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="ip_address" name="ip_address" placeholder="ex: 192.168.88.2-192.168.88.254">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label"><a href="{$_url}routers/add">{Lang::T('Routers')}</a></label>
                                        <div class="col-md-6">
                                            <select id="routers" name="routers" class="form-select" style="height: 52px; background-color: white;">
                                                {if $_c['radius_enable']}
                                                    <option value="radius">Radius</option>
                                                {/if}
                                                {foreach $r as $rs}
                                                    <option value="{$rs['name']}">{$rs['name']}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                        {if $_c['radius_enable']}
                                            <p class="help-block col-md-4">For Radius, you need to add <b>Pool Name</b> in Mikrotik manually</p>
                                        {/if}
                                    </div>
                                    <center>
                                        <div class="form-group row">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-primary mb-3" type="submit">{Lang::T('Save Changes')}</button>
                                                Or <a class="btn btn-outline-primary" href="{$_url}pool/list">{Lang::T('Cancel')}</a>
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