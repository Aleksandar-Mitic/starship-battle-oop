<?php

class Ship
{

    private $id;
    private $name;
    private $weaponPower = 0;
    private $jediFactor = 0;
    private $strength = 0;
    private $underRepair;

    function __construct($name)
    {
        $this->name = $name;
        $this->underRepair = mt_rand(1, 100) < 30;
    }


    public function getNameAndSpecs()
    {
        return sprintf(
            '%s/%s/%s/%s',
            $this->name,
            $this->weaponPower,
            $this->jediFactor,
            $this->strength
        );
    }

    public function isFunctional()
    {
        return !$this->underRepair;
    }

    public function doesGivenShipHasMoreStrength($givenShip)
    {
        return $givenShip->strength > $this->strength;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_string($name)) {
            throw new Exception("Invalid name passed", $name);
        }
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getWeaponPower()
    {
        return $this->weaponPower;
    }

    /**
     * @param mixed $weaponPower
     *
     * @return self
     */
    public function setWeaponPower($weaponPower)
    {
        if (!is_numeric($weaponPower)) {
            throw new Exception("Invalid weaponPower passed", $weaponPower);
        }
        $this->weaponPower = $weaponPower;

        return $this;
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

    /**
     * @return int
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @param mixed $strength
     *
     * @return self
     */
    public function setStrength($strength)
    {
        if (!is_numeric($strength)) {
            throw new Exception("Invalid strength passed", $strength);
        }
        $this->strength = $strength;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

} // end of class Ship
