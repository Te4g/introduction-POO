<?php

class Car
{
    private $nbWheels = 4;
    private $currentSpeed = 0;
    private $color;
    private $nbSeats;
    private $energy;
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward()
    {
        $this->currentSpeed = 50;
        return "Let's go !";
    }

    public function brake()
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed -= 5;
            $sentence .= "Brake !!! ";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start()
    {

    }

    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function gerEnergyLevel()
    {
        return $this->energyLevel;
    }
}
