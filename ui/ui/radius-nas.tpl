{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-hovered mb20 card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Radius</h3>
                            </div>
                            <div class="card-body">
                                <div class="md-whiteframe-z1 mb20 text-center row">
                                    <div class="col-md-8 mb-3">
                                        <form id="site-search" method="post" action="{$_url}radius/nas-list">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <span class="fa fa-search"></span>
                                                </div>
                                                <input type="text" name="name" class="form-control" value="{$name}"
                                                    placeholder="{Lang::T('Search by Name')}...">
                                                <button class="btn btn-success input-group-btn" type="submit">{Lang::T('Search')}</button>
                                                <!-- <div class="input-group-btn">
                                                </div> -->
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{$_url}radius/nas-add" class="btn btn-primary btn-block"><i
                                                class="fa fa-add"> </i> New NAS</a>
                                    </div>&nbsp;
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-condensed table-hover border-primary">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>IP</th>
                                                <th>Type</th>
                                                <th>Port</th>
                                                <th>Server</th>
                                                <th>Community</th>
                                                <th>Routers</th>
                                                <th>{Lang::T('Manage')}</th>
                                                <th>ID</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {foreach $nas as $ds}
                                                <tr>
                                                    <td>{$ds['shortname']}</td>
                                                    <td>{$ds['nasname']}</td>
                                                    <td>{$ds['type']}</td>
                                                    <td>{$ds['ports']}</td>
                                                    <td>{$ds['server']}</td>
                                                    <td>{$ds['community']}</td>
                                                    <td>{$ds['routers']}</td>
                                                    <td align="center">
                                                        <a href="{$_url}radius/nas-edit/{$ds['id']}" class="btn btn-info btn-xs mb-1">{Lang::T('Edit')}</a>
                                                        <a href="{$_url}radius/nas-delete/{$ds['id']}" id="{$ds['id']}"
                                                            onclick="return confirm('{Lang::T('Delete')}?')"
                                                            class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                    <td align="center">{$ds['id']}</td>
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