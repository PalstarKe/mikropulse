{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-hovered mb20 card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Plans</h3>
                                {if in_array($_admin['user_type'],['SuperAdmin','Admin'])}
                                    <div>
                                        <div class="btn-group pull-right">
                                            <a class="btn btn-primary" title="save" href="{$_url}plan/sync"
                                                onclick="return confirm('This will sync/send Caustomer active plan to Mikrotik?')"><span
                                                    class="fa fa-refresh" aria-hidden="true"></span> sync</a>
                                        </div>
                                        <div class="btn-group pull-right">
                                            <a class="btn btn-info" title="save" href="{$_url}customers/csv"
                                                onclick="return confirm('This will export to CSV?')"><span class="fa fa-download"
                                                    aria-hidden="true"></span> CSV</a>
                                        </div>
                                    </div>
                                {/if}
                                &nbsp;
                            </div>
                            <div class="card-body">
                                <div class="md-whiteframe-z1 mb20 text-center row">
                                    <div class="col-md-8 mb-3">
                                        <form id="site-search" method="post" action="{$_url}plan/list/">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <span class="fa fa-search"></span>
                                                </div>
                                                <input type="text" name="search" class="form-control"
                                                    placeholder="{Lang::T('Search by Username')}..." value="{$search}">
                                                <button class="btn btn-success input-group-btn" type="submit">{Lang::T('Search')}</button>
                                                <!-- <div class="input-group-btn">
                                                </div> -->
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{$_url}plan/recharge" class="btn btn-primary btn-block"><i
                                                class="fa fa-add"> </i> {Lang::T('Recharge Account')}</a>
                                    </div>&nbsp;
                                </div>
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-bordered table-striped table-condensed table-hover border-primary">
                                        <thead>
                                            <tr>
                                                <th>{Lang::T('Username')}</th>
                                                <th>{Lang::T('Plan Name')}</th>
                                                <th>{Lang::T('Plan Type')}</th>
                                                <th>{Lang::T('Type')}</th>
                                                <th>{Lang::T('Created On')}</th>
                                                <th>{Lang::T('Expires On')}</th>
                                                <th>{Lang::T('Method')}</th>
                                                <th>{Lang::T('Routers')}</th>
                                                <th>{Lang::T('Manage')}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {foreach $d as $ds}
                                                <tr {if $ds['status']=='off'}class="danger" {/if}>
                                                    <td><a href="{$_url}customers/viewu/{$ds['username']}">{$ds['username']}</a></td>
                                                    <td>{$ds['namebp']}</td>
                                                    <td>{$ds['type']}</td>
                                                    <td>{$ds['plan_type']}</td>
                                                    <td>{Lang::dateAndTimeFormat($ds['recharged_on'],$ds['recharged_time'])}</td>
                                                    <td>{Lang::dateAndTimeFormat($ds['expiration'],$ds['time'])}</td>
                                                    <td>{$ds['method']}</td>
                                                    <td>{$ds['routers']}</td>
                                                    <td>
                                                        <a href="{$_url}plan/edit/{$ds['id']}"
                                                            class="btn btn-warning btn-xs mb-1">{Lang::T('Edit')}</a>
                                                        {if in_array($_admin['user_type'],['SuperAdmin','Admin'])}
                                                            <a href="{$_url}plan/delete/{$ds['id']}" id="{$ds['id']}"
                                                                onclick="return confirm('{Lang::T('Delete')}?')"
                                                                class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                                        {/if}
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