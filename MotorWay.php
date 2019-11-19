<?php

class MotorWay extends HighWay
{
    public $nbLane = 4;
    public $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Cars) {
            $this->setCurrentVehicle($vehicle);
            echo 'Authorized';
        } else {
            echo 'Allowed!';
        }
    }
}
