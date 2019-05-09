<?php

class Ship extends AbstractShip
{
    private $jediFactor = 0;

    private $underRepair;

    function __construct($name)
    {
        parent::__construct($name);

        $this->underRepair = mt_rand(1, 100) < 30;

    }


    /**
    * @return int
    */
    public function getJediFactor()
    {
        return $this->jediFactor;
    }

    /**
     * @param mixed $jediFactor
     *
     * @return self
     */
    public function setJediFactor($jediFactor)
    {
        if (!is_numeric($jediFactor)) {
            throw new Exception("Invalid jediFactor passed", $jediFactor);
        }

        $this->jediFactor = $jediFactor;

        return $this;
    }

    public function isFunctional()
    {
        return !$this->underRepair;
    }

    public function getType()
    {
        return 'Empire';
    }

} // end of class Ship
