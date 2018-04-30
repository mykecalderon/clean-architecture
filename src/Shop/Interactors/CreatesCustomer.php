<?php

namespace Shop\Interactors;

use Shop\Entities\Customer;
use Shop\Gateways\CustomerGateway;
use Shop\Requests\CreateCustomerRequest;
use Shop\Responses\CreateCustomerResponse;

 class CreatesCustomer
{
    protected $request;
    protected $customer_gateway;

    public function __construct(CreateCustomerRequest $request, CustomerGateway $customer_gateway)
    {
        $this->request = $request;
        $this->customer_gateway = $customer_gateway;
    }

    public function execute() 
    {
        $customer = new Customer($this->request->getName(), $this->request->getEmail());
        $customer = $this->customer_gateway->save($customer);
        
        return new CreateCustomerResponse(
            $id = $customer->getId(),
            $created = true
        );
    }
}