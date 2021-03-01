<?php
error_reporting(0);

set_error_handler("errorExchange");
set_exception_handler("dealException");
register_shutdown_function('appShutdown');


function errorExchange($errno, $errstr, $errfile, $errline = 0) {


    var_dump('--------error-----');
   throw new \Exception($errstr, $errno);

}

function appShutdown() {
    var_dump('llllllll');
    $error = error_get_last();
    var_dump($error['line']);
}

function dealException($err)
{
    /*if ($err instanceof ParseError) {
        var_dump('456');
    }
    if ($err instanceof TypeError) {
        var_dump('4656');
    }*/
    var_dump('-----exception---');
    //var_dump($err->getMessage());
    throw $err;


}

try {


  //include_once "a.php";
    $a = 10;
   echo $a;
    $a = 1/0;
} catch (\Throwable $err) {

    var_dump($err->getMessage());
    var_dump('sssssss');
  // throw $err;

}