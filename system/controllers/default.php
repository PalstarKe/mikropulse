<?php
/**
 * PHP Mikrotik Billing (https://github.com/PalstarKe/ispsystem/master.zip)
 *
 * This script is for updating Mikropulse
 **/

if(Admin::getID()){
    r2(U.'dashboard');
}if(User::getID()){
    r2(U.'home');
}else{
    r2(U.'login');
}
