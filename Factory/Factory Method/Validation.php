<?php

namespace Factory\FactoryMethod;

use ValidationInterface;
use ValidationMethodInterface;

require_once "ValidationInterface.php";
require_once "ValidationMethodInterface.php";
require_once "Methods/BankValidation.php";
require_once "Methods/WalletValidation.php";
class Validation implements ValidationInterface
{


    public function getValidationMethod(string $validationMethod): ValidationMethodInterface
    {
        if ($validationMethod == 'bank') {
            return new \Methods\BankValidation();
        }
        return new \Methods\WalletValidation();

    }

}