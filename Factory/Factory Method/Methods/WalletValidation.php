<?php

namespace Methods;

use ValidationMethodInterface;


require_once __DIR__ . '/../ValidationMethodInterface.php';
class WalletValidation implements ValidationMethodInterface
{

    public function getRules(): array
    {
        return [
            'username' => 'required|string',
            'amount' => 'required|numeric',
            'transaction_pin' => 'required|string|min:4|max:4',
        ];
    }
}