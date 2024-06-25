{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-6 col-xxl-12">
                        <div class="card card-primary card-hovered card-stacked mb30">
                            <div class="card-header" style="display: grid; align-content: center; justify-content: center;">
                                <h5 class="card-title">{Lang::T('Add Service Plan')}</h5>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" method="post" role="form" action="{$_url}services/balance-add-post">
                                    <div class="form-group row">
                                        <label class="col-md-4 control-label">{Lang::T('Status')}</label>
                                        <div class="col-md-8">
                                            <label class="radio-inline warning">
                                                <input type="radio" checked name="enabled" value="1"> Enable
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="enabled" value="0"> Disable
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 control-label">{Lang::T('Plan Name')}</label>
                                        <div class="col-md-8">
                                            <input type="text" required class="form-control" id="name" name="name" maxlength="40"
                                                placeholder="Topup 100">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 control-label">{Lang::T('Plan Price')}</label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <span class="input-group-text" >{$_c['currency_code']}</span>
                                                <input type="number" class="form-control" name="price" required>
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-success" type="submit">{Lang::T('Save Changes')}</button>
                                            <a class="btn btn-warning" href="{$_url}services/balance">{Lang::T('Cancel')}</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{include file="sections/footer.tpl"}