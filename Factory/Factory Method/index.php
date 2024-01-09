<?php

require_once 'Validation.php';


$validationMethod = new \Factory\FactoryMethod\Validation();

$validationType = $validationMethod->getValidationMethod('bank');

print_r($validationType->getRules());

$validationType = $validationMethod->getValidationMethod('wallet');

print_r($validationType->getRules());

