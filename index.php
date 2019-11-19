<?php

require 'HighWay.php';
require_once 'Cars.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'Vehicle.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'MotorWay.php';

$tesla = new Cars ('blouge', 4, 'gasoil');

$autobahn = new MotorWay(4, 130);
$autobahn->addVehicle($tesla);
echo '<br>';

$rue = new ResidentialWay(2, 50);
$rue->addVehicle($tesla);
echo '<br>';
$ruelle = new PedestrianWay(1,10);
$ruelle->addVehicle($tesla);
echo '<br>';
$bike = new Bicycle('blue',1);

$ruelle->addVehicle($bike);