<?php

namespace Iterator;

use SocialNetworkInterface;

require_once __DIR__ . '/Contracts/SocialNetworkInterface.php';
require_once __DIR__ . '/Contracts/ProfileIteratorInterface.php';

class FacebookIterator implements \ProfileIteratorInterface
{
    private int $currentPosition = 0;

    public function __construct(public Facebook $facebook)
    {

    }


    public function hasNext(): bool
    {

        return isset($this->facebook->profiles[$this->currentPosition]);

    }

    public function getNext()
    {

        if ($this->hasNext()) {
            return $this->facebook->profiles[$this->currentPosition++];
        }
        return null;

    }
}