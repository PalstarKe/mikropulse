{include file="sections/header.tpl"}
            <div class="container-fluid">
                <form class="form-horizontal" method="post" role="form" action="{$_url}settings/notifications-post">
                    <div class="row">
                        <div class="col-xxl-6 col-xxl-12">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"
                                        style="display: grid; align-content: center; justify-content: center;">
                                        <div class="panel panel-primary panel-hovered panel-stacked mb30">
                                            <div class="card-header">
                                                <h5 class="card-title">{Lang::T('User Notification')}</h5>
                                                <div class="btn-group pull-right">
                                                    <button class="btn btn-primary" title="save" type="submit"><span
                                                            class="flaticon-381-save"
                                                            aria-hidden="true"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="control-label">{Lang::T('Expired Notification
                                                    Message')}</label>
                                                <div class="">
                                                    <textarea style="overflow: hidden;" class="form-control"
                                                        id="expired" oninput="autoExpand(this)" name="expired"
                                                        placeholder="Hello [[name]], your internet package [[package]] has been expired"
                                                        rows="6">{if $_json['expired']!=''}{Lang::htmlspecialchars($_json['expired'])}{else}Hello [[name]], your internet package [[package]] has been expired.{/if}</textarea>
                                                </div>
                                                <script>
                                                    function autoExpand(element) {
                                                        element.style.height = 'auto';
                                                        element.style.height = (element.scrollHeight) + 'px';
                                                    }
                                                </script>
                                                <p class="help-block">
                                                    <b>[[name]]</b> will be replaced with Customer Name.
                                                    <b>[[username]]</b> will be replaced with Customer username.
                                                    <b>[[package]]</b> will be replaced with Package name.
                                                    <b>[[price]]</b> will be replaced with Package price.
                                                    <b>[[bills]]</b> aditional bills for customers
                                                </p>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label">{Lang::T('Reminder 7 days')}</label>
                                                <div class="">
                                                    <textarea class="form-control" id="reminder_7_day"
                                                        name="reminder_7_day"
                                                        rows="4">{Lang::htmlspecialchars($_json['reminder_7_day'])}</textarea>
                                                </div>
                                                <p class="help-block">
                                                    <b>[[name]]</b> will be replaced with Customer Name.
                                                    <b>[[username]]</b> will be replaced with Customer username.
                                                    <b>[[package]]</b> will be replaced with Package name.
                                                    <b>[[price]]</b> will be replaced with Package price.
                                                    <b>[[expired_date]]</b> will be replaced with Expiration date.
                                                    <b>[[bills]]</b> aditional bills for customers
                                                </p>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">{Lang::T('Reminder 3 days')}</label>
                                                <div class="">
                                                    <textarea class="form-control" id="reminder_3_day"
                                                        name="reminder_3_day"
                                                        rows="3">{Lang::htmlspecialchars($_json['reminder_3_day'])}</textarea>
                                                </div>
                                                <p class="help-block">
                                                    <b>[[name]]</b> will be replaced with Customer Name.
                                                    <b>[[username]]</b> will be replaced with Customer username.
                                                    <b>[[package]]</b> will be replaced with Package name.
                                                    <b>[[price]]</b> will be replaced with Package price.
                                                    <b>[[expired_date]]</b> will be replaced with Expiration date.
                                                    <b>[[bills]]</b> aditional bills for customers
                                                </p>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">{Lang::T('Reminder 1 day')}</label>
                                                <div class="">
                                                    <textarea class="form-control" id="reminder_1_day"
                                                        name="reminder_1_day"
                                                        rows="3">{Lang::htmlspecialchars($_json['reminder_1_day'])}</textarea>
                                                </div>
                                                <p class="help-block">
                                                    <b>[[name]]</b> will be replaced with Customer Name.
                                                    <b>[[username]]</b> will be replaced with Customer username.
                                                    <b>[[package]]</b> will be replaced with Package name.
                                                    <b>[[price]]</b> will be replaced with Package price.
                                                    <b>[[expired_date]]</b> will be replaced with Expiration date.
                                                    <b>[[bills]]</b> aditional bills for customers
                                                </p>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">{Lang::T('Invoice Notification
                                                    Payment')}</label>
                                                <div class="">
                                                    <textarea class="form-control" id="invoice_paid" name="invoice_paid"
                                                        placeholder="Hello [[name]], your internet package [[package]] has been expired"
                                                        rows="20">{Lang::htmlspecialchars($_json['invoice_paid'])}</textarea>
                                                </div>
                                                <p class="help-block">
                                                    <b>[[company_name]]</b> Your Company Name at Settings.
                                                    <b>[[address]]</b> Your Company Address at Settings.
                                                    <b>[[phone]]</b> Your Company Phone at Settings.
                                                    <b>[[invoice]]</b> invoice number.
                                                    <b>[[date]]</b> Date invoice created.
                                                    <b>[[payment_gateway]]</b> Payment gateway user paid from.
                                                    <b>[[payment_channel]]</b> Payment channel user paid from.
                                                    <b>[[type]]</b> is Hotspot/PPPOE.
                                                    <b>[[plan_name]]</b> Internet Package.
                                                    <b>[[plan_price]]</b> Internet Package Prices.
                                                    <b>[[name]]</b> Receiver name.
                                                    <b>[[user_name]]</b> Username internet.
                                                    <b>[[user_password]]</b> User password.
                                                    <b>[[expired_date]]</b> Expired datetime.
                                                    <b>[[footer]]</b> Invoice Footer.
                                                    <b>[[note]]</b> For Notes by admin.
                                                </p>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">{Lang::T('Balance Notification
                                                    Payment')}</label>
                                                <div class="">
                                                    <textarea class="form-control" id="invoice_balance"
                                                        name="invoice_balance"
                                                        placeholder="Hello [[name]], your internet package [[package]] has been expired"
                                                        rows="20">{Lang::htmlspecialchars($_json['invoice_balance'])}</textarea>
                                                </div>
                                                <p class="help-block">
                                                    <b>[[company_name]]</b> Your Company Name at Settings.
                                                    <b>[[address]]</b> Your Company Address at Settings.
                                                    <b>[[phone]]</b> Your Company Phone at Settings.
                                                    <b>[[invoice]]</b> invoice number.
                                                    <b>[[date]]</b> Date invoice created.
                                                    <b>[[payment_gateway]]</b> Payment gateway user paid from.
                                                    <b>[[payment_channel]]</b> Payment channel user paid from.
                                                    <b>[[type]]</b> is Hotspot/PPPOE.
                                                    <b>[[plan_name]]</b> Internet Package.
                                                    <b>[[plan_price]]</b> Internet Package Prices.
                                                    <b>[[name]]</b> Receiver name.
                                                    <b>[[user_name]]</b> Username internet.
                                                    <b>[[user_password]]</b> User password.
                                                    <b>[[trx_date]]</b> Transaction datetime.
                                                    <b>[[balance_before]]</b> Balance Before.
                                                    <b>[[balance]]</b> Balance After.
                                                    <b>[[footer]]</b> Invoice Footer.
                                                </p>
                                            </div>
                                            {if $_c['enable_balance'] == 'yes'}
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="control-label">{Lang::T('Send Balance')}</label>
                                                    <div class="">
                                                        <textarea class="form-control" id="balance_send"
                                                            name="balance_send"
                                                            rows="3">{if $_json['balance_send']}{Lang::htmlspecialchars($_json['balance_send'])}{else}{Lang::htmlspecialchars($_default['balance_send'])}{/if}</textarea>
                                                    </div>
                                                    <p class="help-block">
                                                        <b>[[name]]</b> Receiver name.
                                                        <b>[[balance]]</b> how much balance have been send.
                                                        <b>[[current_balance]]</b> Current Balance.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="control-label">{Lang::T('Received Balance')}</label>
                                                    <div class="">
                                                        <textarea class="form-control" id="balance_received"
                                                            name="balance_received"
                                                            rows="3">{if $_json['balance_received']}{Lang::htmlspecialchars($_json['balance_received'])}{else}{Lang::htmlspecialchars($_default['balance_received'])}{/if}</textarea>
                                                    </div>
                                                    <p class="help-block">
                                                        <b>[[name]]</b> Sender name.
                                                        <b>[[balance]]</b> how much balance have been received.
                                                        <b>[[current_balance]]</b> Current Balance.
                                                    </p>
                                                </div>
                                            </div>
                                            {/if}
                                            <hr>
                                            <div class="form-group">
                                                <button class="btn btn-success btn-block" type="submit">{Lang::T('Save
                                                    Changes')}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
{include file="sections/footer.tpl"}