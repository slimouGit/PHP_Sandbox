<?php

/**
 * wider tires for more stability in turns
 *
 * @author Thorsten Hallwas
 */
class ChipTuning extends CarDecorator
{

    public function __construct($car)
    {
        parent::__construct($car, 'ChipTuning');
    }

    /**
     * the tires increase the turnspeed
     * @return float
     */
    public function getTurnSpeed()
    {
        return $this->car->getTurnSpeed() * 1.2;
    }

    /**
     * add 1000 Euros to the prize of the car
     * @return int
     */
    public function getCost()
    {
        return $this->car->getCost() + 1000;
    }	

    /**
     * we use 5% more gas
     * @return float
     */
    public function getCostsPerKilometer()
    {
        return $this->car->getCostsPerKilometer() * .9;
    }

}