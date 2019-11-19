<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var int
     */
    private $storageCapacity;

    /**
     * @var int
     */
    private $loading = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity, int $loading)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
        $this->loading = $loading;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function loading(): string
    {
        if ($this->loading < $this->storageCapacity) {
            return 'in filling';
        } elseif ($this->loading == $this->storageCapacity) {
            return 'full';
        }
    }

    public
    function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public
    function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public
    function getLoading(): int
    {
        return $this->loading;
    }

    public
    function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }
}



