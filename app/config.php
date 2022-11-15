<?php

define("ROOT", "https://8000-rafacunha033-phpmvc-nrg09b56g1o.ws-us75.gitpod.io");

define("SITE", "#TEST");

define("DATA_LAYER_CONFIG", [
    "driver"   => "mysql",
    "host"     => "localhost",
    "port"     => "3306",
    "dbname"   => "php_mvc",
    "username" => "root",
    "password" => "",
    "options"  => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

function url(string $uri = null): string {
    if($uri) {
        return ROOT."/{$uri}";
    }

    return ROOT;
}