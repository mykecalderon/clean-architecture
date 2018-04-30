<?php

namespace Shop\Entities;

class Profile
{
    protected $channel;

    /**
     * Class Constructor
     * @param    $channel   
     */
    public function __construct($channel)
    {
        $this->channel = $channel;
    }

    /**
     * @return mixed
     */
    public function getChannel()
    {
        return $this->channel;
    }
}