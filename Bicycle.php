<?php

use http\QueryString;

class Bicycle
{
    private $color;
    private $currentSpeed;
    private $nbSeats = 1;
    private $nbWheels = 2;

    public function getColor():string
    {
        return $this->color;
    }
    public function setColor(string $color):void
    {
        $this->color = $color;
    }
    public function getCurrentSpeed(): string
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(string $currentSpeed):void
    {
        $this->currentSpeed = $currentSpeed;
    }
    public function getNbSeats():int
    {
        return $this->nbSeats;
    }
    public function setNbSeats(int $nbSeats):void
    {
        $this->nbSeats = $nbSeats;
    }
    public function getNbWheels():int
    {
        return $this->nbWheels;
    }
    public function setNbWheels(int $nbWheels):void
    {
        $this->nbWheels = $nbWheels;
    }
    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!! ";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
}