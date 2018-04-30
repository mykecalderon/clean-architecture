<?php

namespace Tests\Unit;

use Shop\Entities\Location;
use Shop\Entities\Profile;
use Shop\Interactors\GetLocationProfiles;
use Tests\TestCase;
use \Mockery;

class LocationsTest extends TestCase
{
    /** @test */
    function can_get_locations_profiles()
    {
        $request = Mockery::mock(GetLocationProfilesRequest::class);

        $request->shouldReceive('getId')
                ->times(1)
                ->andReturn(1);

        $response = (new GetLocationProfiles($request, new LocationsProfileGateway))->execute();

        $this->assertInstanceOf(GetLocationProfilesResponse::class, $response);
    }
}