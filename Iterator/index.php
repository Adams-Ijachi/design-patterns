<?php


use Iterator\Facebook;

require_once __DIR__ . '/Facebook.php';

$user_profiles = [
    [
        'name' => 'John Doe',
        'email' => 'john@test.com',
       ],
    [
        'name' => 'Jane Doe',
        'email' => 'jane@test.com',
    ],
];

$profiles = new Facebook($user_profiles);
$profileIterator = $profiles->getIterator();


while ($profileIterator->hasNext()) {
    $profile = $profileIterator->getNext();
    echo $profile['name'] . ' - ' . $profile['email'] . PHP_EOL;
}