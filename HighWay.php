<?php


/**
 * Class Highway
 */
abstract class Highway
{
    /**
     * @var array
     */
    protected $currentVehicle=[];
    /**
     * @var int
     */
    protected $nbLane;
    /**
     * @var int
     */
    protected $maxSpeed;

    public function __construct($nbLane,$maxSpeed)
    {
        $this->nbLane=$nbLane;
        $this->maxSpeed=$maxSpeed;
    }

    /**
     * @return array
     */
    public function getCurrentVehicle(): array
    {
        return $this->currentVehicle;
    }

    /**
     * @param array $currentVehicle
     * @return Highway
     */
    public function setCurrentVehicle($currentVehicle)
    {
        $this->currentVehicle[] = $currentVehicle;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     *
     */
    public function setNbLane(int $nbLane)
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     * @return Highway
     */
    public function setMaxSpeed(int $maxSpeed): Highway
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }

    abstract public function addVehicle(Vehicle $vehicle);
}