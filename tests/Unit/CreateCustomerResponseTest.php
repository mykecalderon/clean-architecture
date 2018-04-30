<?php

namespace Tests\Unit;

use Shop\Responses\CreateCustomerResponse;
use Tests\TestCase;

class CreateCustomerResponseTest extends TestCase
{

    /** @test */
    function can_retrieve_properties()
    {
        $response = new CreateCustomerResponse(
            $id = 1,
            $created = true
        );

        $this->assertNotNull($response);
        $this->assertEquals(1, $response->getId());
        $this->assertTrue($response->isCreated());
    }
}