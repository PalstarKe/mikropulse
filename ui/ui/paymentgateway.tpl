{include file="sections/header.tpl"}
            <div class="container-fluid">
                <form method="post">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-3">
                            <div class="card card-info card-hovered">
                                <div class="card-header">
                                    <h3 class="card-title">{Lang::T('Payment Gateway')}</h3>
                                </div>
                                <div class="table-responsive card-body">
                                    <table class="table table-striped table-condensed">
                                        <tbody>
                                            {foreach $pgs as $pg}
                                                <tr>
                                                    <td width="12" align="center" valign="center"><input type="checkbox" name="pgs[]"
                                                            {if in_array($pg, $actives)}checked{/if} value="{$pg}"></td>
                                                    <td><a href="{$_url}paymentgateway/{$pg}"
                                                            class="btn btn-block btn-{if in_array($pg, $actives)}info{else}default{/if} text-left">{ucwords($pg)}</a>
                                                    </td>
                                                    <td width="12"><a href="{$_url}paymentgateway/delete/{$pg}"
                                                            onclick="return confirm('{Lang::T('Delete')} {$pg}?')" class="btn btn-danger"><i
                                                                class="fa fa-trash"></i></a></td>
                                                </tr>
                                            {/foreach}
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer"><button type="submit" class="btn btn-primary btn-block" name="save"
                                        value="actives">{Lang::T('Save Changes')}</button></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
{include file="sections/footer.tpl"}