{include file="sections/header.tpl"}
<div class="container-fluid">
<form class="form-horizontal" method="post" role="form" action="{$_url}settings/app-post">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card card-primary card-hovered card-stacked mb30">
                <div class="card-header">Information</div>
                <div class="card-body">
                    <p>After import, you need to configure Packages, set time limit</p>
                    <ol>
                        {foreach $results as $result}
                            <li>{$result}</li>
                        {/foreach}
                    </ol>
                </div>
            </div>
        </div>
    </div>
</form>
</div>

{include file="sections/footer.tpl"}
