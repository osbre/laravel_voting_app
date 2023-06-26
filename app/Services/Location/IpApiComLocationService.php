<?php

namespace App\Services\Location;

use App\DataObjects\LocationData;
use Illuminate\Support\Facades\Http;

class IpApiComLocationService implements LocationService
{
    public function getLocationDataByIp(string $ipAddress): LocationData
    {
        $data = Http::get("http://ip-api.com/json/$ipAddress")
            ->throw()
            ->json();

        return new LocationData(
            countryName: $data->country,
            cityName: $data->city,
        );
    }
}
