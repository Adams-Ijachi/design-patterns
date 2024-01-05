<?php

namespace Observer\Observers;

use Observer\ObserversInterface;
use Observer\ObservableInterface;

require_once __DIR__.'/../ObservableInterface.php';
require_once __DIR__.'/../ObserversInterface.php';
class SendNewsLetters implements ObserversInterface
{

    public function update(ObservableInterface $observable): void
    {
        echo "Notifying followers about new post through news letter: \n";
    }
}