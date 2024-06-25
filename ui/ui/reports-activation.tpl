{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-hovered mb20 card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Activity Log</h3>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="col-md-12">
                                        <form id="site-search" method="post" action="{$_url}reports/activation">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <span class="fa fa-search"></span>
                                                </div>
                                                <input type="text" name="q" class="form-control" value="{$q}"
                                                    placeholder="{Lang::T('Invoice')}...">
                                                <button class="btn btn-success input-group-btn" type="submit">{Lang::T('Search')}</button>
                                                <!-- <div class="input-group-btn">
                                                </div> -->
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-8">
                                    </div>&nbsp;
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-bordered table-striped table-hover border-primary">
                                        <thead>
                                            <tr>
                                                <th>{Lang::T('Invoice')}</th>
                                                <th>{Lang::T('Username')}</th>
                                                <th>{Lang::T('Plan Name')}</th>
                                                <th>{Lang::T('Plan Price')}</th>
                                                <th>{Lang::T('Type')}</th>
                                                <th>{Lang::T('Created On')}</th>
                                                <th>{Lang::T('Expires On')}</th>
                                                <th>{Lang::T('Method')}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {foreach $activation as $ds}
                                                <tr>
                                                    <td onclick="window.location.href = '{$_url}plan/view/{$ds['id']}'"
                                                    style="cursor:pointer;">{$ds['invoice']}</td>
                                                    <td onclick="window.location.href = '{$_url}customers/viewu/{$ds['username']}'"
                                                    style="cursor:pointer;">{$ds['username']}</td>
                                                    <td>{$ds['plan_name']}</td>
                                                    <td>{Lang::moneyFormat($ds['price'])}</td>
                                                    <td>{$ds['type']}</td>
                                                    <td class="text-success">
                                                        {Lang::dateAndTimeFormat($ds['recharged_on'],$ds['recharged_time'])}
                                                    </td>
                                                    <td class="text-danger">{Lang::dateAndTimeFormat($ds['expiration'],$ds['time'])}</td>
                                                    <td>{$ds['method']}</td>
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