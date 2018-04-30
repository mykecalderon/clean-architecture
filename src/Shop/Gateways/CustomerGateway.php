<?php

namespace Shop\Gateways;

use Shop\Entities\Customer;

interface CustomerGateway
{
    public function save(Customer $customer);
    public function find($customer_id);
}