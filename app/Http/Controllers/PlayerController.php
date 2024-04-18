<?php

namespace App\Http\Controllers;

use App\Http\Resources\ItemResource;
use App\Http\Resources\PlayerResource;
use App\Models\Player;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PlayerController extends Controller
{
    public function get(): ResourceCollection {
        return PlayerResource::collection(Player::all());
    }
}
