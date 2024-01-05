<?php

namespace Observer;

require_once 'ObservableInterface.php';
require_once 'ObserversInterface.php';
class UserTweets implements ObservableInterface
{

     protected array $observers = [];

    public function newTweet(): void
    {
        $this->notifyObservers();
    }


    public function getTweet(): string
    {
        return "This is my first tweet";
    }


    public function registerObserver(ObserversInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(ObserversInterface $observer): void
    {
        $index = array_search($observer, $this->observers);
        if ($index){
            unset($this->observers[$index]);
        }
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer){
            $observer->update($this);
        }
    }

}