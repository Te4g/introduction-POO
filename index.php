<?php
require_once ('Bicycle.php');
require_once ('Car.php');

$bike = new Bicycle();


$bike->setColor('blue');
$bike->setCurrentSpeed(0);


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

$clio = new Car('black', 4, 'diesel');

echo '<br><br>';
echo $clio->forward();
echo '<br> Vitesse de la voiture : ' . $clio->getCurrentSpeed() . ' km/h' . '<br>';
echo $clio->brake();
echo '<br> Vitesse de la voiture : ' . $clio->getCurrentSpeed() . ' km/h' . '<br>';
echo $clio->brake();