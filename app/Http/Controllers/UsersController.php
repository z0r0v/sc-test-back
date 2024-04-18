<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UsersController extends Controller
{
    public function get(): ResourceCollection {
        return UserResource::collection(User::all());
    }
}
