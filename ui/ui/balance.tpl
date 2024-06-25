{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-6 col-xxl-12">
                        <div class="card panel-hovered mb20 panel-primary">
                            <div class="card-header" style="display: grid; align-content: center; justify-content: center;">
                                <h5 class="card-title">{Lang::T('Balance Plans')}</h5>
                            </div>
                            <div class="card-body">
                                <div class="md-whiteframe-z1 mb20 text-center row" style="padding: 15px">
                                    <div class="col-md-8">
                                        <form id="site-search" method="post" action="{$_url}services/balance/">
                                        <div class="input-group">
                                            <!-- <div class="input-group-addon">
                                                <span class="fa fa-search"></span>
                                            </div> -->
                                            <input type="text" name="name" class="form-control" placeholder="{Lang::T('Search by Name')}...">
                                            <button class="btn btn-success" style="border-radius: 0 12px 12px 0; border: none;" type="submit"><i class="fa fa-search"></i>{Lang::T('Search')}</button>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{$_url}services/balance-add" class="btn btn-primary btn-block"><i class="fa fa-plus"> </i> {Lang::T('New Service Plan')}</a>
                                    </div>&nbsp;
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>{Lang::T('Plan Name')}</th>
                                                <th>{Lang::T('Plan Price')}</th>
                                                <th>{Lang::T('Manage')}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {foreach $d as $ds}
                                            <tr {if $ds['enabled'] != 1}class="danger" title="disabled"{/if}>
                                                <td>{$ds['name_plan']}</td>
                                                <td>{Lang::moneyFormat($ds['price'])}</td>
                                                <td>
                                                    <a href="{$_url}services/balance-edit/{$ds['id']}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>{Lang::T('Edit')}</a>
                                                    <a href="{$_url}services/balance-delete/{$ds['id']}" onclick="return confirm('{Lang::T('Delete')}?')" id="{$ds['id']}" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        {/foreach}
                                        </tbody>
                                    </table>
                                </div>
                                {include file="pagination.tpl"}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{include file="sections/footer.tpl"}