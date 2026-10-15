<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'email_verified_at' => now(date_default_timezone_get()),
        ]);
        $token = $user->createToken('laravel_api_token')->plainTextToken;
        return response()->json([
            'token' => $token,
            'user' => $user
        ], Response::HTTP_CREATED
        // Hasil 201 menandakan bahwa data berhasil dibuat
        );
    }
}
