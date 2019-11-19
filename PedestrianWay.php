<?php

final class PedestrianWay extends HighWay
{
    protected $nbLane = 1;
    protected $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle){
            $this->currentVehicle = $vehicle;
            echo "Authorized vehicle";
        } else {
            echo "Not authorized vehicle !";
        }
    }

}