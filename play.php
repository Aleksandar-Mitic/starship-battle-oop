<?php
require_once __DIR__.'/lib/Ship.php';
require __DIR__.'/functions.php';

$test = get_ships();

var_dump($test);


// $myShip = new Ship();

// $myShip->name = 'test';
// $myShip->weaponPower = '2';
// $myShip->jediFactor = '1';
// $myShip->strength = '15';

// $myShip->getNameAndSpecs();

$firstShip = new Ship();
$firstShip->name = 'firstShip name';
$firstShip->weaponPower = '2';
$firstShip->jediFactor = '1';
$firstShip->strength = '5';

$secondShip = new Ship();
$secondShip->name = 'secondShip name';
$secondShip->weaponPower = '2';
$secondShip->jediFactor = '1';
$secondShip->strength = '15';

// if ($firstShip->doesGivenShipHasMoreStrength($secondShip)) {
//     echo $secondShip->name . ' has more strength';
// } else {
//     echo $firstShip->name . ' has more strength';
// }
