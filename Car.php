<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    const ALLOWED_ENERGIES = ['fuel', 'electric'];
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::_construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}