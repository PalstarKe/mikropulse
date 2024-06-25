{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="card card-primary card-hovered card-stacked mb30">
                            <div class="card-header">
                                <h3  class="card-title">{Lang::T('Edit Pool')}</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" method="post" role="form" action="{$_url}pool/edit-post" >
                                    <input type="hidden" name="id" value="{$d['id']}">
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Name Pool')}</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="name" name="name" value="{$d['pool_name']}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Range IP')}</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="ip_address" name="ip_address" value="{$d['range_ip']}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Routers')}</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="routers" name="routers" value="{$d['routers']}" readonly>
                                        </div>
                                        {if $_c['radius_enable']}
                                            <p class="help-block col-md-4">For Radius, you need to add <b>Pool Name</b> in Mikrotik manually</p>
                                        {/if}
                                    </div>
                                    <center>
                                        <div class="form-group row">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-success mb-3" type="submit">{Lang::T('Save Changes')}</button>
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