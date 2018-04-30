<?php

namespace Shop\Gateways;

use Shop\Entities\Customer;
use Shop\Gateways\CustomerGateway;

class InMemoryLocationProfilesGateway implements CustomerGateway
{
    protected $profiles;

    /**
     * Class Constructor
     * @param    $profiles   
     */
    public function __construct($profiles = [])
    {
        $this->profiles = $profiles;
    }

    public function all()
    {
        return $this->profiles;
    }

    public function save($location_id, $profiles) 
    {
        $this->profiles[$location_id] = $profiles;
    }

    public function find($id)
    {
        if (isset($this->profiles[$id])) {
            return $this->profiles[$id];
        }
        return null;
    }
}