<?php
/**
 * PHP Mikrotik Billing (https://github.com/PalstarKe/ispsystem/master.zip)
 *
 * This script is for updating Mikropulse
 **/

run_hook('customer_logout'); #HOOK
if (session_status() == PHP_SESSION_NONE) session_start();
Admin::removeCookie();
User::removeCookie();
session_destroy();
_alert(Lang::T('Logout Successful'),'warning', "login");