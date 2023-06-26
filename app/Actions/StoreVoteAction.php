<?php

namespace App\Actions;

use App\DataObjects\StoreVoteData;
use App\Models\User;
use App\Models\Vote;
use App\Services\Location\LocationService;

class StoreVoteAction
{
    public function __construct(protected LocationService $locationService)
    {
    }

    public function execute(StoreVoteData $data): Vote
    {
        $user = User::findOrFail($data->userId);

        $location = $this->locationService
            ->getLocationDataByIp($data->ipAddress);

        return $user->vote()->create([
            'item_id' => $data->itemId,
            'ip_address' => $data->ipAddress,
            'country' => $location->countryName,
            'city' => $location->cityName,
        ]);
    }
}
