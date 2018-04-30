<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GatewayServiceProvider extends ServiceProvider
{
    /**
     * All of the container singletons that should be registered.
     *
     * @var array
     */
    public $singletons = [
        'Shop\Gateways\CustomerGateway' => 'Shop\Gateways\InMemoryCustomerGateway',
    ];
}
