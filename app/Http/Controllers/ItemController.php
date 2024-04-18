<?php

namespace App\Http\Controllers;

use App\Http\Resources\ItemResource;
use App\Models\Item;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ItemController extends Controller
{
    public function get(): ResourceCollection {
        return ItemResource::collection(Item::all());
    }
}
