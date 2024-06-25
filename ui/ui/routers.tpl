{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-hovered mb20 card-primary">
                            <div class="card-header">
                                <h3 class="card-title">{Lang::T('Routers')}</h3>
                            </div>
                            <div class="card-body">
                                <div class="md-whiteframe-z1 mb20 text-center">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <form id="site-search" method="post" action="{$_url}routers/list/">
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
                                            <a href="{$_url}routers/add" class="btn btn-primary btn-block"><i
                                                    class="fa fa-add"> </i> {Lang::T('New Router')}</a>
                                        </div>&nbsp;
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>{Lang::T('Router Name')}</th>
                                                <th>{Lang::T('IP Address')}</th>
                                                <th>{Lang::T('Username')}</th>
                                                <th>{Lang::T('Description')}</th>
                                                <th>{Lang::T('Status')}</th>
                                                <th>{Lang::T('Manage')}</th>
                                                <th>ID</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {foreach $d as $ds}
                                                <tr {if $ds['enabled'] != 1}class="danger" title="disabled" {/if}>
                                                    <td>{$ds['name']}</td>
                                                    <td>{$ds['ip_address']}</td>
                                                    <td>{$ds['username']}</td>
                                                    <td>{$ds['description']}</td>
                                                    <td>{if $ds['enabled'] == 1}Enabled{else}Disabled{/if}</td>
                                                    <td>
                                                        <a href="{$_url}routers/edit/{$ds['id']}"
                                                            class="btn btn-info btn-xs mb-1">{Lang::T('Edit')}</a>
                                                        <a href="{$_url}routers/delete/{$ds['id']}" id="{$ds['id']}"
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