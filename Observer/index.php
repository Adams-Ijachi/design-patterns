<?php


use Observer\UserTweets;

require_once "UserTweets.php";
require_once "Observers/SendNewsLetters.php";
require_once "Observers/NotifyFollowers.php";


$userTweet = new UserTweets();
$userTweet->registerObserver(new \Observer\Observers\NotifyFollowers());
$userTweet->registerObserver(new \Observer\Observers\SendNewsLetters());

$userTweet->newTweet();