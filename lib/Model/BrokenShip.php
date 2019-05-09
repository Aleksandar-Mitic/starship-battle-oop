<?php

class BrokenShip extends AbstractShip
{
    public function getJediFactor(){
        return 0;
    }

    public function getType(){
        return 'Broken ship';
    }

    public function isFunctional(){
        return false;
    }
}
