{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-hovered mb20 card-primary">
                            <div class="card-header">
                                <h3 class="card-title">{Lang::T('PPPOE Plans')}</h3>
                                <div class="btn-group pull-right">
                                    <a class="btn btn-primary" title="save" href="{$_url}services/sync/pppoe"
                                        onclick="return confirm('This will sync/send PPPOE plan to Mikrotik?')"><span
                                            class="fa fa-refresh" aria-hidden="true"></span> sync</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="md-whiteframe-z1 mb20 text-center row">
                                    <div class="col-md-8 mb-3">
                                        <form id="site-search" method="post" action="{$_url}services/pppoe/">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <span class="fa fa-search"></span>
                                                </div>
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="{Lang::T('Search by Name')}...">
                                                <button class="btn btn-success input-group-btn" type="submit">{Lang::T('Search')}</button>
                                                <!-- <div class="input-group-btn">
                                                </div> -->
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{$_url}services/pppoe-add" class="btn btn-primary btn-block"><i
                                                class="fa fa-add"> </i> {Lang::T('New Service Plan')}</a>
                                    </div>&nbsp;
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>{Lang::T('Plan Name')}</th>
                                                <th>{Lang::T('Plan Type')}</th>
                                                <th>{Lang::T('Bandwidth Plans')}</th>
                                                <th>{Lang::T('Plan Price')}</th>
                                                <th>{Lang::T('Plan Validity')}</th>
                                                <th>{Lang::T('IP Pool')}</th>
                                                <th>{Lang::T('Expired IP Pool')}</th>
                                                <th>{Lang::T('Routers')}</th>
                                                <th>{Lang::T('Manage')}</th>
                                                <th>ID</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {foreach $d as $ds}
                                                <tr {if $ds['enabled'] != 1}class="danger" title="disabled"{/if}>
                                                    <td>{$ds['name_plan']}</td>
                                                    <td>{$ds['plan_type']} {if $ds['prepaid'] != 'yes'}<b>Postpaid</b>{else}Prepaid{/if}</td>
                                                    <td>{$ds['name_bw']}</td>
                                                    <td>{Lang::moneyFormat($ds['price'])}</td>
                                                    <td>{$ds['validity']} {$ds['validity_unit']}</td>
                                                    <td>{$ds['pool']}</td>
                                                    <td>{$ds['pool_expired']}{if $ds['list_expired']}
                                                        {if $ds['pool_expired']} |
                                                            {/if}{$ds['list_expired']}
                                                        {/if}</td>
                                                    <td>
                                                        {if $ds['is_radius']}
                                                            <span class="label label-primary">RADIUS</span>
                                                        {else}
                                                            {if $ds['routers']!=''}
                                                                <a href="{$_url}routers/edit/0&name={$ds['routers']}">{$ds['routers']}</a>
                                                            {/if}
                                                        {/if}
                                                    </td>
                                                    <td>
                                                        <a href="{$_url}services/pppoe-edit/{$ds['id']}"
                                                            class="btn btn-info btn-xs mb-1">{Lang::T('Edit')}</a>
                                                        <a href="{$_url}services/pppoe-delete/{$ds['id']}"
                                                            onclick="return confirm('{Lang::T('Delete')}?')" id="{$ds['id']}"
                                                            class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                    <td>{$ds['id']}</td>
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