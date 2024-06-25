{include file="sections/header.tpl"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="card card-primary card-hovered card-stacked mb30">
                            <div class="card-header">
                                <h3 class="card-title">{Lang::T('Period Reports')}</h3></div>
                            <div class="card-body">
                                <form class="form-horizontal" method="post" role="form" action="{$_url}reports/period-view">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">{Lang::T('From Date')}</label>
                                        <div class="col-md-9">
                                            <input type="date" class="form-control" value="{$tdate}" name="fdate" id="fdate">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">{Lang::T('To Date')}</label>
                                        <div class="col-md-9">
                                        <input type="date" class="form-control" value="{$mdate}" name="tdate" id="tdate">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">{Lang::T('Type')}</label>
                                        <div class="col-md-9">
                                            <select class="form-select" style="height: 52px; background-color: white;" id="stype" name="stype">
                                                <option value="" selected="">{Lang::T('All Transactions')}</option>
                                                <option value="Hotspot">Hotspot</option>
                                                <option value="PPPOE">PPPOE</option>
                                                <option value="Balance">Balance</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" id="submit" class="btn btn-primary">{Lang::T('Period Reports')}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{include file="sections/footer.tpl"}