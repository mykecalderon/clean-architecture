<?php

namespace Tests\Unit;

use Shop\Entities\Location;
use Shop\Entities\Profile;
use Shop\Interactors\GetLocationProfiles;
use Tests\TestCase;
use \Mockery;

class LocationProfilesGatewayTest extends TestCase
{
    /** @test */
    function can_save_profiles_for_location()
    {
        $profiles = [
            new Profile('facebook'),
            new Profile('google'),
        ];

        $location = new Location('Test Location');

        $location_profiles_gateway->save($location->getId(), $profiles);
    }
}