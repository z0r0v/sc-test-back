<?php

namespace App\Http\Controllers;

use App\Enums\RolesEnum;
use Auth;
use App\Models\User;

class UsersController extends Controller
{
    public function get() {
        return response()->json(User::all());
    }
}
