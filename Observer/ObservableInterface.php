<?php

namespace Observer;
interface ObservableInterface
{
    public function registerObserver(ObserversInterface $observer);
    public function removeObserver(ObserversInterface $observer);
    public function notifyObservers();

}