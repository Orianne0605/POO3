<?php

final class ResidentialWay extends HighWay
{
    protected $nbLane = 2;
    protected $maxSpeed = 50;
    /**
     * @var Vehicle
     */
    protected $currentVehicle;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Vehicle) {
            $this->currentVehicle = $vehicle;
            echo 'Works!';
        }else {
            echo 'Allowed!';
        }
    }
}