<?php


use Singleton\LoggingSingleton;

require_once "LoggingSingleton.php";

$log = LoggingSingleton::getInstance();

$log->log('Hello world');





