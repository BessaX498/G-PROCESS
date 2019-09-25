<?php

require_once 'api_google/vendor/autoload.php';
require_once 'client.json';

$client = new Google_Client();

$client->setApplicationName("Login with Google Account using PHP");

$client->setAuthConfig("client.json");

$client->addScope([Google_Service_Oauth2::PLUS_LOGIN,Google_Service_Oauth2::USERINFO_EMAIL]);

$client->setRedirectUri("http://localhost/googleauth/redirect.php");



?>