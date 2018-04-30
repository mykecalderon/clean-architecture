<?php

namespace Shop\Gateways;

use Shop\Entities\Customer;

interface LocationProfilesGateway
{
    public function save($location_id, $profiles);
    public function find($location_id);
}