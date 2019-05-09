<?php

class RebelShip extends AbstractShip
{

    public function getFavoriteJedi()
    {
        $coolJedis = array('Yoda', 'Ben Kenobi');
        $key = array_rand($coolJedis);
        return $coolJedis[$key];
    }

    public function getNameAndSpecs()
    {
        $val = parent::getNameAndSpecs();
        $val .= ' (Rebel)';
        return $val;
    }

    public function getType()
    {
        return 'Rebel';
    }

    public function isFunctional()
    {
        return true;
    }

    public function getJediFactor()
    {
        return rand(10, 30);
    }

}


