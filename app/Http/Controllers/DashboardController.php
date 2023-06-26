<?php

namespace App\Http\Controllers;

use App\Repositories\ItemRepository;

class DashboardController extends Controller
{
    public function __invoke(ItemRepository $itemRepository)
    {
        return inertia('Dashboard', [
            'items' => $itemRepository->all(), // TODO: use json resource or fractal package to transform data
        ]);
    }
}
