<?php

namespace App\DataObjects;

class LocationData
{
    public function __construct(
        public readonly string $countryName,
        public readonly string $cityName,
    ) {
    }
}
