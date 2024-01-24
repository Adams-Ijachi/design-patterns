<?php

namespace Iterator;

use ProfileIteratorInterface;

require_once __DIR__ . '/Contracts/SocialNetworkInterface.php';
require_once __DIR__ . '/Contracts/ProfileIteratorInterface.php';
require_once __DIR__ . '/FacebookIterator.php';

class Facebook implements \SocialNetworkInterface
{

    public array $profiles = [];

    public function __construct(array $profiles = [])
    {
        $this->profiles = $profiles;
    }

    public function getIterator(): ProfileIteratorInterface
    {
        return new FacebookIterator($this);
    }

    public function addProfile($profile): void
    {
        $this->profiles[] = $profile;
    }

    public function getProfiles(): array
    {
        return $this->profiles;
    }

}