<?php

use myPHPNotes\LinkedIn;
require_once "LinkedIn.php";

$app_id = "APP_ID";
$app_secret = "APP_SECRET";
$callback = "ENDEREÇO DEFINIDO NO APP";
$scopes = "r_liteprofile%20r_emailaddress%20w_member_social";// APENAS ALGUNS EXEMPLOS DE SCOPES
$ssl = false; //TRUE FOR PRODUCTION ENV.

$linkedin = new LinkedIn($app_id, $app_secret, $callback, $scopes, $ssl);