{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-hovered mb20 card-primary">
                            <div class="card-header">
                                <h3 class="card-title">{Lang::T('Manage Administrator')}</h3>
                            </div>
                            <div class="card-body">
                                <div class="md-whiteframe-z1 mb20 text-center row" style="padding: 15px">
                                    <div class="col-md-8">
                                        <form id="site-search" method="post" action="{$_url}settings/users/">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <span class="fa fa-search"></span>
                                                </div>
                                                <input type="text" name="search" value="{$search}" class="form-control"
                                                    placeholder="Search by Username...">
                                                <button class="btn btn-success input-group-btn" type="submit">{Lang::T('Search')}</button>
                                                <!-- <div class="input-group-btn">
                                                </div> -->
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{$_url}settings/users-add" class="btn btn-primary btn-block"><i
                                                class="fa fa-add"> </i> {Lang::T('Add New Administrator')}</a>
                                    </div>&nbsp;
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>{Lang::T('Username')}</th>
                                                <th>{Lang::T('Full Name')}</th>
                                                <th>{Lang::T('Phone')}</th>
                                                <th>{Lang::T('Email')}</th>
                                                <th>{Lang::T('Type')}</th>
                                                <th>{Lang::T('Location')}</th>
                                                <th>{Lang::T('Agent')}</th>
                                                <th>{Lang::T('Last Login')}</th>
                                                <th>{Lang::T('Manage')}</th>
                                                <th>ID</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {foreach $d as $ds}
                                                <tr {if $ds['status'] != 'Active'}class="danger"{/if}>
                                                    <td>{$ds['username']}</td>
                                                    <td>{$ds['fullname']}</td>
                                                    <td>{$ds['phone']}</td>
                                                    <td>{$ds['email']}</td>
                                                    <td>{$ds['user_type']}</td>
                                                    <td>{$ds['city']}, {$ds['subdistrict']}, {$ds['ward']}</td>
                                                <td>{if $ds['root']}
                                                    <a href="{$_url}settings/users-view/{$ds['root']}">
                                            {$admins[$ds['root']]}</a>{/if}</td>
                                        <td>{if $ds['last_login']}{Lang::timeElapsed($ds['last_login'])}{/if}</td>
                                                    <td>
                                                        <a href="{$_url}settings/users-view/{$ds['id']}"
                                                            class="btn btn-success btn-xs mb-1">{Lang::T('View')}</a>
                                                        <a href="{$_url}settings/users-edit/{$ds['id']}"
                                                            class="btn btn-info btn-xs mb-1">{Lang::T('Edit')}</a>
                                                        {if ($_admin['id']) neq ($ds['id'])}
                                                            <a href="{$_url}settings/users-delete/{$ds['id']}" id="{$ds['id']}"
                                                                class="btn btn-danger btn-xs" onclick="return confirm('{Lang::T('Delete')}?')"><i class="fa fa-trash"></i></a>
                                                        {/if}
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