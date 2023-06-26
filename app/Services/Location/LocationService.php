<?php

namespace App\Services\Location;

use App\DataObjects\LocationData;

interface LocationService
{
    public function getLocationDataByIp(string $ipAddress): LocationData;
}
