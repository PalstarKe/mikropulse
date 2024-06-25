{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-md-offset-3">
                        <div class="card card-hovered card-primary card-stacked mb30">
                            <div class="card-body">
                                <form class="form-horizontal" method="post" action="{$_url}plan/print" target="_blank">
                                    <pre id="content"></pre>
                                    <textarea class="hidden" id="formcontent" name="content">{$print}</textarea>
                                    <input type="hidden" name="id" value="{$in['id']}">
                                    <div class="row">
                                        <a href="{$_url}plan/voucher" class="btn btn-success btn-sm mb-2"><i
                                                class="fa fa-reply-all"></i>{Lang::T('Finish')}</a>
                                        <a href="https://api.whatsapp.com/send/?text={$whatsapp}" target="_blank"
                                            class="btn btn-primary btn-sm mb-2">
                                            <i class="fa fa-share"></i> WhatsApp</a>
                                        <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-print"></i>
                                            Print</button>
                                            <!-- <a href="nux://print?text={urlencode($print)}"
                                            class="btn btn-success text-black btn-sm hidden-md hidden-lg">
                                                <i class="fa fa-phone"></i>
                                                Print
                                            </a>
                                            <a href="https://github.com/hotspotbilling/android-printer"
                                            class="btn btn-success text-black btn-sm hidden-xs hidden-sm" target="_blank">
                                                <i class="fa fa-phone"></i>
                                                NuxPrint
                                            </a> -->
                                    </div>
                                </form>
                                <javascript type="text/javascript">
                                </javascript>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    document.getElementById('content').innerHTML = document.getElementById('formcontent').innerHTML;
                </script>
            </div>
{include file="sections/footer.tpl"}