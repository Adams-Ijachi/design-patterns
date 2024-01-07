<?php


require_once "Modes/Air.php";
require_once "Modes/Land.php";
require_once "Decorators/ComfortFeaturesDecorator.php";
require_once "Decorators/LuggageDecorator.php";


$transportMode = new \Decorator\Modes\Air();

echo $transportMode->getDescription() . " " . $transportMode->calculatePrice() . "\n";

$transportMode = new \Decorator\Modes\Land($transportMode);

echo $transportMode->getDescription() . " " . $transportMode->calculatePrice() . "\n";

$transportMode = new \Decorator\Decorators\ComfortFeaturesDecorator($transportMode);
$transportMode = new \Decorator\Decorators\LuggageDecorator($transportMode);

echo $transportMode->getDescription() . " " . $transportMode->calculatePrice() . "\n";

