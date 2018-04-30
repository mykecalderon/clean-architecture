<?php

namespace Shop\Gateways;

use Shop\Entities\Customer;
use Shop\Gateways\CustomerGateway;

class InMemoryCustomerGateway implements CustomerGateway
{
    protected $customers;

    /**
     * Class Constructor
     * @param    $customers   
     */
    public function __construct($customers = [])
    {
        $this->customers = $customers;
    }

    public function all()
    {
        return $this->customers;
    }

    public function save(Customer $customer) 
    {
        $id = count($this->customers) + 1;
        $this->customers[$id] = $customer;
        $customer->setId($id);
        return $customer;
    }

    public function find($id)
    {
        if (isset($this->customers[$id])) {
            return $this->customers[$id];
        }
        return null;
    }
}