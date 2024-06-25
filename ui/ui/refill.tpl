{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="card card-primary card-hovered card-stacked mb30">
                            <div class="card-header">
                                <h3 class="card-title">{Lang::T('Refill Account')}</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" method="post" role="form" action="{$_url}plan/refill-post">
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Select Account')}</label>
                                        <div class="col-md-6">
                                            <select id="personSelect" class="form-control select2" name="id_customer"
                                                style="width: 100%;" data-placeholder="{Lang::T('Select a customer')}...">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">{Lang::T('Code Voucher')}</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="code" name="code"
                                                placeholder="{Lang::T('Enter voucher code here')}">
                                        </div>
                                    </div>
                                    <center>
                                        <div class="form-group row">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-success mb-3" type="submit">{Lang::T('Recharge')}</button>
                                                Or <a class="btn btn-outline-primary" href="{$_url}customers/list">{Lang::T('Cancel')}</a>
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