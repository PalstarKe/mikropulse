{include file="sections/header.tpl"}
<div class="container-fluid">
<form class="form-horizontal" method="post" role="form" action="{$_url}plugin/port_tester">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card card-primary card-hovered card-stacked mb30">
                <div class="card-header">Testing port external</div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Port</label>
                        <div class="col-md-6">
                            <input type="text" id="port" name="port" value="{$port}" placeholder="8728" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-success waves-effect waves-light" type="submit">Test It</button>
                        </div>
                    </div>
                    {if $result != ''}
                        <div class="">Result</div>
                        <div class="">
                            {Lang::nl2br($result)}
                        </div>
                    {/if}
                </div>
            </div>
        </div>
    </div>
</form>
</div>

{include file="sections/footer.tpl"}
