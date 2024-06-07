<?php
define('APP', array(
    'TITLE' => 'DEVS',
    //   'ROOT'=>$_SERVER["GO_URL"],
    'VERSION' => '1.0',
    'DB' => array(
        'HOST' => $_SERVER["MYSQL_HOST"],
        'USER' => $_SERVER["MYSQL_USER"],
        'PASSWORD' => $_SERVER["MYSQL_PASSWORD"],
        'NAME' => $_SERVER["MYSQL_DATABASE"],
    ),
    'GO-API' => $_SERVER["API_URL"],
));
define("DEFAULT_DB", array(
    'HOST' => $_SERVER["MYSQL_HOST"],
    'USER' => $_SERVER["MYSQL_USER"],
    'PASSWORD' => $_SERVER["MYSQL_PASSWORD"],
    'NAME' => 'upt',
));
