<?php
/**
 * PHP Mikrotik Billing (https://github.com/PalstarKe/ispsystem/master.zip)
 *
 * This script is for updating Mikropulse
 **/

_admin();
$ui->assign('_title', 'Community');
$ui->assign('_system_menu', 'community');

$action = $routes['1'];
$ui->assign('_admin', $admin);

$ui->display('community.tpl');