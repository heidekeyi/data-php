<?php

namespace daily\api;

class Api
{
    static public function header()
    {
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:HEAD,GET,POST,OPTIONS,PATCH,PUT,DELETE');
        header('Access-Control-Allow-Headers:Origin,X-Requested-With,Authorization,Content-Type,Accept,Z-Key');
    }

    static public function load()
    {
        include '../back-end-with-php/Autoload.php';
        include '../back-end-with-php/Bootstrap.php';
    }
}

Api::header();
Api::load();