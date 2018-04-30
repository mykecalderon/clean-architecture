<?php

namespace Tests\Unit;

use Shop\Gateways\InMemoryCustomerGateway;
use Shop\Interactors\CreatesCustomer;
use Shop\Requests\CreateCustomerRequest;
use Shop\Responses\CreateCustomerResponse;
use Tests\TestCase;
use \Mockery;

class CustomerTest extends TestCase
{

    /** @test */
    function can_create_new_customer()
    {
        $request = Mockery::mock(CreateCustomerRequest::class);

        $request->shouldReceive('getName')
                ->times(1)
                ->andReturn('John Doe');

        $request->shouldReceive('getEmail')
                ->times(1)
                ->andReturn('test@example.com');

        $response = (new CreatesCustomer($request, new InMemoryCustomerGateway))->execute();

        $this->assertInstanceOf(CreateCustomerResponse::class, $response);
        $this->assertEquals(true, $response->isCreated());
        $this->assertEquals(1, $response->getId());
    }
}