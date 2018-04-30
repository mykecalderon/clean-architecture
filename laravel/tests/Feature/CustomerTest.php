<?php

namespace Tests\Feature;

use Shop\Entities\Customer;
use Shop\Gateways\CustomerGateway;
use Tests\TestCase;

class CustomerTest extends TestCase
{
    function setUp()
    {
        parent::setUp();
        $this->customer_gateway = $this->app->make(CustomerGateway::class);
    }

    /** @test */
    function can_create_customer()
    {
        $this->withoutExceptionHandling();
        
        $response = $this->json('POST', '/customers/create', [
            'name' => 'John Doe',
            'email' => 'test@example.com',
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'customer_id' => 1,
        ]);

        $id = json_decode($response->content(), true)['data']['customer_id'];
        $customer = $this->customer_gateway->find($id);
        $this->assertNotNull($customer);
    }
}
