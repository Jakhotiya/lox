<?php
use Lox\Lox;
error_reporting(E_ALL);
ini_set('display_errors',1);
try{
    require_once 'vendor/autoload.php';
}catch (\Throwable $e){
    echo $e->getMessage();
}



$lox = new Lox();

$lox->execute();
