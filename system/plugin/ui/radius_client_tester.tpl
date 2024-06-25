{include file="sections/header.tpl"} 
<div class="container-fluid">
    <form class="form-horizontal" method="post" role="form" action="{$_url}plugin/radius_client_tester">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="card card-primary card-hovered card-stacked mb30">
                    <div class="card-header">Test User Connectivity</div>
                    <div class="card-body">
                      <div class="form-group">
                        <label class=" control-label">Username</label>
                        <div class="">
                          <input type="text" id="username" name="username" value="{$username}" placeholder="Username" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class=" control-label">password</label>
                        <div class="">
                          <input type="password" id="password" name="password" value="{$password}" placeholder="Password" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class=" control-label">Nas IP Address</label>
                        <div class="">
                          <input type="text" id="address" name="address" value="{$address}" placeholder="127.0.0.1" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class=" control-label">Nas Port</label>
                        <div class="">
                          <input type="text" id="port" name="port" value="{$port}" placeholder="1812" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Nas Secret</label>
                        <div class="">
                          <input type="text" id="secret" name="secret" value="{$secret}" placeholder="testing123" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                          <button class="btn btn-success waves-effect waves-light" type="submit" name="submit" value="Submit">Test User Connection</button>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                {if $output != ''} 
                    <div class="card card-primary card-hovered card-stacked mb30">
                        <div class="card-header">Results</div>
                        <div class="card-body">
                          <pre>{$output}</pre>
                        </div>
                    </div>
                {/if}
            </div> 
        </div>
    </form> 
</div>
{include file="sections/footer.tpl"}