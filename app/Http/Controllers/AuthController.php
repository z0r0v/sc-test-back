<?php

namespace App\Http\Controllers;

use App\Data\AuthData;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function get(AuthData $data): string {
        $user = User::query()
            ->where('email', $data->email)
            ->first();

        if (
            !$user ||
            !Hash::check(
                $data->password,
                $user->password
            )
        ) {
            throw ValidationException::withMessages([
                'email' => [
                    'The provided credentials are incorrect.'
                ],
            ]);
        }

        return $user
            ->createToken('sdf')
            ->plainTextToken;
    }
}
