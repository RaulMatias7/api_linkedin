<?php

require_once "init.php";

$accessToken = $linkedin->getAccessToken($_GET['code']);
$profileObject = $linkedin->getPerson();
$emailObject = $linkedin->getEmail();

var_dump($accessToken); // RETORNA O TOKEM DE ACESSO
var_dump($profileObject); // RETORNA O PERFIL DO USUÁRIO LOGADO

var_dump($emailObject->elements[0]->{"handle~"}->emailAddress);// RETORNA O EMAIL DO USUÁRIO LOGADO



