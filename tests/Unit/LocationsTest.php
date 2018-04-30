<?php

namespace Tests\Unit;

use Shop\Entities\Profile;
use Shop\Entities\Location;
use Tests\TestCase;

class LocationsTest extends TestCase
{
    /** @test */
    function can_get_locations_profiles()
    {
        $profiles = [
            new Profile('facebook'),
            new Profile('google'),
        ];

        $location = new Location('Test Location');
        $location->setProfiles($profiles);

        $this->assertEquals(2, count($location->getProfiles()));
        $this->assertEquals('facebook', $location->getProfiles()[0]->getChannel());
        $this->assertEquals('google', $location->getProfiles()[1]->getChannel());
    }
}