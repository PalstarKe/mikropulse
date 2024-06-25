{include file="sections/user-header.tpl"}
<!-- user-change-password -->

<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="card card-primary card-hovered card-stacked mb30">
            <div class="card-header">{Lang::T('Change Password')}</div>
            <div class="card-body">
                <form class="form-horizontal" method="post" role="form" action="{$_url}accounts/change-password-post">
                    <div class="form-group">
                        <label class=" control-label">{Lang::T('Current Password')}</label>
                        <div class="col-md-12">
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">{Lang::T('New Password')}</label>
                        <div class="col-md-12">
                            <input type="password" class="form-control" id="npass" name="npass">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class=" control-label">{Lang::T('Confirm New Password')}</label>
                        <div class="col-md-12">
                            <input type="password" class="form-control" id="cnpass" name="cnpass">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button class="btn btn-success btn-block"
                                type="submit">{Lang::T('Save Changes')}</button>
                            Or <a class="btn btn-warning btn-block" href="{$_url}home">{Lang::T('Cancel')}</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

{include file="sections/user-footer.tpl"}