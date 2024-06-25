{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-hovered mb20 card-primary">
                            <div class="card-header">
                                <h3 class="card-title">{Lang::T('IP Pool')}</h3>
                                <div class="btn-group pull-right">
                                    <a class="btn btn-primary btn-xs" title="save" href="{$_url}pool/sync"
                                        onclick="return confirm('This will sync/send IP Pool to Mikrotik?')"><span
                                            class="fa fa-refresh" aria-hidden="true"></span> sync</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="md-whiteframe-z1 mb20 text-center row">
                                    <div class="col-md-8 mb-3">
                                        <form id="site-search" method="post" action="{$_url}pool/list/">
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
                                        <a href="{$_url}pool/add" class="btn btn-primary btn-block"><i
                                                class="fa fa-add"> </i> {Lang::T('New Pool')}</a>
                                    </div>&nbsp;
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-condensed table-hover border-primary">
                                        <thead>
                                            <tr>
                                                <th>{Lang::T('Name Pool')}</th>
                                                <th>{Lang::T('Range IP')}</th>
                                                <th>{Lang::T('Routers')}</th>
                                                <th>{Lang::T('Manage')}</th>
                                                <th>ID</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {foreach $d as $ds}
                                                <tr>
                                                    <td>{$ds['pool_name']}</td>
                                                    <td>{$ds['range_ip']}</td>
                                                    <td>{$ds['routers']}</td>
                                                    <td align="center">
                                                        <a href="{$_url}pool/edit/{$ds['id']}" class="btn btn-info btn-xs mb-1">{Lang::T('Edit')}</a>
                                                        <a href="{$_url}pool/delete/{$ds['id']}" id="{$ds['id']}"
                                                            onclick="return confirm('{Lang::T('Delete')}?')"
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