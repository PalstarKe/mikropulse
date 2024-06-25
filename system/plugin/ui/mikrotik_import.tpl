{include file="sections/header.tpl"}
<div class="container-fluid">
    <form class="form-horizontal" method="post" role="form" action="{$_url}plugin/mikrotik_import_start_ui">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="card card-primary card-hovered card-stacked mb30">
                    <div class="card-header">Import User and Packages from Mikrotik</div>
                    <div class="card-body">
                        <p>This Plugin only import Packages and Users Active package will not be imported You must Refill the user or User buy new package</p>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Type</label>
                            <div class="col-md-6">
                                <input type="radio" id="Hot" name="type" value="Hotspot"> Hotspot_Plans
                                <input type="radio" id="POE" name="type" value="PPPOE"> PPPOE_Plans
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">{$_L['Routers']}</label>
                            <div class="col-md-6">
                                <select id="server" required name="server" class="form-control">
                                    <option value=''>{$_L['Select_Routers']}</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-success waves-effect waves-light" type="submit">Import User</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
{include file="sections/footer.tpl"}
