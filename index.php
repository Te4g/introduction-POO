<?php

require_once ('Truck.php');

$camion = new Truck('black', 4, 150, 'fuel' );
var_dump($camion);

$camion->setLoadStatus(149);
var_dump($camion);

$camion->getLoadStatus();

echo $camion->forward();
echo '<br> Vitesse du camion : ' . $camion->getCurrentSpeed() . ' km/h' . '<br>';
echo $camion->brake();
echo '<br> Vitesse du camion : ' . $camion->getCurrentSpeed() . ' km/h' . '<br>';
echo $camion->brake();
echo '<br> Le camion est ' . $camion->getLoadStatus() . ' !' . '<br>';

echo '<br>';

$camion->setLoadStatus(150);
echo $camion->forward();
echo '<br> Vitesse du camion : ' . $camion->getCurrentSpeed() . ' km/h' . '<br>';
echo $camion->brake();
echo '<br> Vitesse du camion : ' . $camion->getCurrentSpeed() . ' km/h' . '<br>';
echo $camion->brake();
echo '<br> Le camion est ' . $camion->getLoadStatus() . ' !' . '<br>';
