<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCustomerRequest;
use App\Http\Resources\CreateCustomerResource;
use Illuminate\Http\Request;
use Shop\Gateways\CustomerGateway;
use Shop\Interactors\CreatesCustomer;

class CustomerController extends Controller
{
    public function __construct(CustomerGateway $customer_gateway)
    {
        $this->customer_gateway = $customer_gateway;
    }

    public function create(CreateCustomerRequest $request) 
    {
        $response = (new CreatesCustomer($request, $this->customer_gateway))->execute();

        return new CreateCustomerResource($response);
    }
}
