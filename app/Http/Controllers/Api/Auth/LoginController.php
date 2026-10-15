<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Cari di user berdasarkan email yang dikirimkan dari request
        $user = User :: where('email', $request->email)->first();
        // Jika user kosong, maka dikirimkan pesan 'User atau password salah.' dengan status 404
        if (!$user) {
            throw ValidationException::withMessages(
                [
                    'email' => ['User atau password salah.'],
                ]
            );
        }
        $token = $user->createToken('laravel_api_token') -> plainTextToken;
        return response()->json([
            'token' => $token,
            'user'=> $user
        ],  Response::HTTP_OK   
         // Hasil 200 menandakan bahwa data berhasil ditemukan dan dikembalikan (login berhasil)
        );
    }
}
