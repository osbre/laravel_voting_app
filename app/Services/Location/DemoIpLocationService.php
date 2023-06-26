<?php

namespace App\Services\Location;

use App\DataObjects\LocationData;

class DemoIpLocationService implements LocationService
{
    public function __construct(protected string $apiKey)
    {
    }

    public function getLocationDataByIp(string $ipAddress): LocationData
    {
        return new LocationData(
            countryName: "Demo country retrieved by ip $ipAddress",
            cityName: "Demo city retrieved by ip $ipAddress",
        );
    }
}
