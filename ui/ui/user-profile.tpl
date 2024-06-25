{include file="sections/user-header.tpl"}
<!-- user-profile -->

            <div class="row">
                <div class="col-xl-6 col-xxl-12">
                    <div class="card card-primary card-hovered card-stacked mb30">
                        <div class="card-header">
                            <div class="card-title mb-2">{Lang::T('Edit User')}</div>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" role="form" action="{$_url}accounts/edit-profile-post">
                                <input type="hidden" name="id" value="{$d['id']}">
                                <div class="form-group">
                                    <label class="control-label">{Lang::T('Username')}</label>
                                    <div class="">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1">+</span>
                                            <input type="text" class="form-control" name="username" id="username" readonly
                                                value="{$d['username']}"
                                                placeholder="{if $_c['country_code_phone']!= ''}{$_c['country_code_phone']}{/if} {Lang::T('Phone Number')}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">{Lang::T('Full Name')}</label>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" id="fullname" name="fullname"
                                            value="{$d['fullname']}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">{Lang::T('Address')}</label>
                                    <div class="input-group mb-2">
                                        <textarea name="address" id="address" class="form-control">{$d['address']}</textarea>
                                    </div>
                                </div>
                                {if $_c['allow_phone_otp'] != 'yes'}
                                    <div class="form-group">
                                        <label class="control-label">{Lang::T('Phone Number')}</label>
                                        <div class="mb-2">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">+</span>
                                                <input type="text" class="form-control" name="phonenumber" id="phonenumber"
                                                    value="{$d['phonenumber']}"
                                                    placeholder="{if $_c['country_code_phone']!= ''}{$_c['country_code_phone']}{/if} {Lang::T('Phone Number')}">
                                            </div>
                                        </div>
                                    </div>
                                {else}
                                    <div class="form-group">
                                        <label class="control-label">{Lang::T('Phone Number')}</label>
                                        <div class="mb-2">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">+</span>
                                                <input type="text" class="form-control" name="phonenumber" id="phonenumber"
                                                    value="{$d['phonenumber']}" readonly
                                                    placeholder="{if $_c['country_code_phone']!= ''}{$_c['country_code_phone']}{/if} {Lang::T('Phone Number')}">
                                                <span class="input-group-text">
                                                    <a href="{$_url}accounts/phone-update" type="button"
                                                        class="">{Lang::T('Change')}</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                {/if}
                                <div class="form-group">
                                    <label class="control-label">{Lang::T('Email')}</label>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" id="email" name="email" value="{$d['email']}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="">
                                        <button class="btn btn-success" type="submit">
                                        {Lang::T('Save Changes')}</button>
                                        Or <a href="{$_url}home" class="btn btn-primary">{Lang::T('Cancel')}</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

{include file="sections/user-footer.tpl"}