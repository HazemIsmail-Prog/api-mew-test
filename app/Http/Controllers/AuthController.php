<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|exists:users',
            'password' => 'required',
        ]);

        $user = User::query()->where('username', $request->username)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return [
                'errors' => [
                    'username' => ['The provided credentials are incorrect']
                ]
            ];
        }

        $token = $user->createToken($user->name);
        return [
            'user' => $user,
            'token' => $token->plainTextToken,
        ];
    }
    public function logout(Request $request)
    {

        $request->user()->tokens()->delete();

        return [
            'message' => 'You are logged out'
        ];
    }
}
