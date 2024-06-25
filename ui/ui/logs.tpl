{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-hovered mb20 card-primary">
                            <div class="card-header">
                                Activity Log
                                {if in_array($_admin['user_type'],['SuperAdmin','Admin'])}
                                    <div class="btn-group pull-right">
                                        <a class="btn btn-primary btn-xs" title="save" href="{$_url}logs/list-csv"
                                            onclick="return confirm('This will export to CSV?')"><span class="fa fa-download"
                                                aria-hidden="true"></span> CSV</a>
                                    </div>
                                {/if}
                            </div>
                            <div class="card-body">
                                <div class="text-center" style="padding: 15px">
                                    <div class="col-md-12 mb-3">
                                        <form id="site-search" method="post" action="{$_url}logs/list/">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <span class="fa fa-search"></span>
                                                </div>
                                                <input type="text" name="q" class="form-control" value="{$q}"
                                                    placeholder="{Lang::T('Search by Name')}...">
                                                    <button class="btn btn-success input-group-btn" type="submit">{Lang::T('Search')}</button>
                                                <!-- <div class="input-group-btn">
                                                </div> -->
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-12">
                                        <form class="form-inline" method="post" action="{$_url}logs/list/">
                                            <div class="input-group has-error">
                                                <span class="input-group-text">Keep Logs </span>
                                                <input type="text" name="keep" class="form-control" placeholder="90" value="90">
                                                <span class="input-group-text">Days</span>
                                                <button type="submit" class="btn btn-danger input-group-btn"
                                                    onclick="return confirm('Clear old logs?')">Clean Logs</button>
                                            </div>
                                        </form>
                                    </div>&nbsp;
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-condensed table-hover border-primary">
                                        <tbody>
                                            {foreach $d as $ds}
                                                <tr>
                                                    <td>{$ds['id']}</td>
                                                    <td>{Lang::dateTimeFormat($ds['date'])}</td>
                                                    <td>{$ds['type']}</td>
                                                    <td>{$ds['ip']}</td>
                                                    <td style="overflow-x: scroll;">{nl2br($ds['description'])}</td>
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