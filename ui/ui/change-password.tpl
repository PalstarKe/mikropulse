{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="card card-primary card-hovered card-stacked mb30">
                            <div class="card-header" style="display: grid; align-content: center; justify-content: center;">
                                <h5 class="card-title">{Lang::T('Change Password')}</h5></div>
                                <div class="card-body">
                                <form class="form-horizontal" method="post" role="form" action="{$_url}settings/change-password-post">
                                    <div class="form-group row">
                                        <label class="col-md-4 control-label">{Lang::T('Current Password')}</label>
                                        <div class="col-md-6">
                                            <input type="password" class="form-control" id="password" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 control-label">{Lang::T('New Password')}</label>
                                        <div class="col-md-6">
                                            <input type="password" class="form-control" id="npass" name="npass">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 control-label">{Lang::T('Confirm New Password')}</label>
                                        <div class="col-md-6">
                                            <input type="password" class="form-control" id="cnpass" name="cnpass">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-success" type="submit">{Lang::T('Save Changes')}</button>
                                            Or <a href="{$_url}dashboard">{Lang::T('Cancel')}</a>
                                        </div>
                                    </div>
                                </form>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{include file="sections/footer.tpl"}