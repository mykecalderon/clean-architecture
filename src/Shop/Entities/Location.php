<?php

namespace Shop\Entities;

class Location
{
    protected $name;
    protected $profiles;

    /**
     * Class Constructor
     * @param    $name   
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * @param mixed $profiles
     *
     * @return self
     */
    public function setProfiles($profiles)
    {
        $this->profiles = $profiles;

        return $this;
    }
}