<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', '/home/gilmario/error_log.txt');
error_reporting(E_ALL);
require_once '../vendor/autoload.php';

//use App\Models\Usuario;
//use jaspion\Util\AnotacaoUtil;
session_start();
$init = new jaspion\Init\Jaspion();


//echo \jaspion\Util\JSonUtil::criaJson("json", $classe);
//echo \jaspion\Util\JSonUtil::criaJson("array", $array);
//echo \jaspion\Util\JSonUtil::criaJson("variavel", $valor);





