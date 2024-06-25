{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-md-offset-3">
                        <div class="card card-hovered card-primary card-stacked mb30">
                            <div class="card-header">{$in['invoice']}</div>
                            <div class="card-body">
                                <form class="form-horizontal" method="post" action="{$_url}plan/print" target="_blank">
                                    <pre id="content"></pre>
                                    <textarea class="hidden" id="formcontent" name="content">{$invoice}</textarea>
                                    <input type="hidden" name="id" value="{$in['id']}">
                                    <div class="">
                                        <a href="{$_url}plan/list" class="btn btn-success btn-sm"><i
                                                class="fa fa-reply-all"></i>{Lang::T('Finish')}</a>
                                        <a href="https://api.whatsapp.com/send/?text={$whatsapp}" target="_blank"
                                        class="btn btn-primary btn-sm">
                                        <i class="fa fa-share"></i> WhatsApp</a>
                                        <a href="{$_url}plan/view/{$in['id']}/send" class="btn btn-info btn-sm"><i
                                                class="fa fa-envelope"></i> {Lang::T("Resend")}</a>
                                            <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-print"></i>
                                            Print</button>
                                        <!-- <a href="nux://print?text={urlencode($invoice)}"
                                        class="btn btn-success btn-sm hidden-md hidden-lg">
                                            <i class="fa fa-phone"></i>
                                            Print Invoice
                                        </a>
                                        <a href="https://github.com/hotspotbilling/android-printer"
                                        class="btn btn-success btn-sm hidden-xs hidden-sm" target="_blank">
                                            <i class="fa fa-phone"></i>
                                            Print Invoice
                                        </a> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    var s5_taf_parent = window.location;
                    document.getElementById('content').innerHTML = document.getElementById('formcontent').innerHTML;
                </script>
            </div>
{include file="sections/footer.tpl"}