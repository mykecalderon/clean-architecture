<?php

namespace Shop\Interactors;

 class GetLocationProfiles
{
    protected $request;
    protected $location_profiles_gateway;

    public function __construct(GetLocationProfilesRequest $request, LocationProfilesGateway $location_profiles_gateway)
    {
        $this->request = $request;
        $this->location_profiles_gateway = $location_profiles_gateway;
    }

    public function execute() 
    {
    }
}