<?php

class RebelShip extends Ship
{

    public function getFavoriteJedi()
    {
        $coolJedis = array('Yoda', 'Ben Kenobi');
        $key = array_rand($coolJedis);
        return $coolJedis[$key];
    }


    public function getNameAndSpecs()
    {
        return sprintf(
            '%s/%s/%s/%s (Rebel)',
            $this->getName(),
            $this->getWeaponPower(),
            $this->getJediFactor(),
            $this->getStrength()
        );
    }

    public function getType()
    {
        return 'Rebel';
    }

    public function isFunctional()
    {
        return true;
    }

}


