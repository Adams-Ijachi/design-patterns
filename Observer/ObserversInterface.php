<?php

namespace Observer;
require_once 'ObservableInterface.php';
interface ObserversInterface
{
    public function update(ObservableInterface $observable);
}