<?php

namespace Methods;

use ValidationMethodInterface;


require_once __DIR__ . '/../ValidationMethodInterface.php';

class BankValidation implements ValidationMethodInterface
{

    public function getRules(): array
    {
        return [
            'name' => 'required',
            'account' => 'required|numeric',
            'agency' => 'required|numeric',
            'bank' => 'required|numeric',
            'amount' => 'required|numeric',
            'transaction_pin' => 'required|string|min:4|max:4',
        ];
    }
}