{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-primary card-hovered">
                            <div class="card-header">
                                <h3 class="card-title">{Lang::T('Plugin')}</h3>
                            </div>
                            <div class="card-body row">
                                {foreach $plugins as $plugin}
                                    <div class="col-md-6">
                                        <div class="card kanbanPreview-bx">
                                            <div class="card-body">
                                                <div class="sub-card">
                                                    <span class="text-warning sub-title fs-14">{$plugin['name']}</span>
                                                    <p class="font-w300">{$plugin['description']}</p>
                                                    <div class="row justify-content-between align-items-center">
                                                        <div>
                                                            <span>
                                                                <center>
                                                                    <small><i>@{$plugin['author']} Last update: {$plugin['last_update']}</i></small>
                                                                </center>
                                                            </span>
                                                        </div>
                                                        <div class="btn-group btn-group-justified mb-2" role="group" aria-label="...">
                                                            <a href="{$plugin['url']}" target="_blank"  class="btn btn-primary"><i
                                                                    class="fa fa-globe"></i> Web</a>
                                                            <a href="{$plugin['github']}" target="_blank"  class="btn btn-info"><i
                                                                    class="fa fa-align-left"></i> Source</a>
                                                        </div>
                                                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                                            <a href="{$_url}pluginmanager/delete/plugin/{$plugin['id']}" onclick="return confirm('{Lang::T('Delete')}?')" class="btn btn-danger"><i
                                                            class="fa fa-trash"></i> Delete</a>
                                                            <a {if $zipExt } href="{$_url}pluginmanager/install/plugin/{$plugin['id']}"
                                                                    onclick="return confirm('Installing plugin will take some time to complete, do not close the page while it loading to install the plugin')"
                                                                {else} href="#" onclick="alert('PHP ZIP extension is not installed')"
                                                                {/if} 
                                                                class="btn btn-success"><i class="fa fa-circle-arrow-down"></i> Install</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card card-primary card-hovered">
                            <div class="card-header">
                                <h3 class="card-title">{Lang::T('Payment Gateway')}</h3>
                            </div>
                            <div class="card-body row">
                                foreach $pgs as $pg}
                                    <div class="col-md-6">
                                        <div class="card kanbanPreview-bx">
                                            <div class="card-body">
                                                <div class="sub-card">
                                                    <span class="text-warning sub-title fs-14">{$pg['name']}</span>
                                                    <p class="font-w300">{$pg['description']}</p>
                                                    <div class="row justify-content-between align-items-center">
                                                        <div>
                                                            <span>
                                                                <center>
                                                                    <small><i>@{$pg['author']} Last update: {$pg['last_update']}</i></small>
                                                                </center>
                                                            </span>
                                                        </div>
                                                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                                            <a href="{$pg['url']}" target="_blank"  class="btn btn-primary"><i
                                                                    class="fa fa-globe"></i> Web</a>
                                                            <a href="{$pg['github']}" target="_blank"  class="btn btn-info"><i
                                                                    class="fa fa-align-left"></i> Source</a>
                                                            <a {if $zipExt } href="{$_url}pluginmanager/install/payment/{$pg['id']}"
                                                                    onclick="return confirm('Installing plugin will take some time to complete, do not close the page while it loading to install the plugin')"
                                                                {else} href="#" onclick="alert('PHP ZIP extension is not available')"
                                                                {/if} 
                                                                class="btn btn-success"><i class="fa fa-circle-arrow-down"></i> Install</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{include file="sections/footer.tpl"}