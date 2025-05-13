<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate the user
        if (auth()->attempt($request->only('email', 'password'))) {
            $payload = [
                'iss' => "laravel-jwt", // emisor
                'sub' => auth()->user()->id, // ID del usuario
                'iat' => time(),            //emitido en 
                'exp' => time() + 60 * 60, // expira en una hora
            ];

            $jwt = $this->generateJWT($payload);

            return response()->json([
                'message' => 'Login successful',
                'token' => $jwt,
                'user' => auth()->user(),
            ]);
       
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    private function generateJWT(array $payload){
        $header = base64_encode(json_encode(['typ' => 'JWT', 'alg' => 'HS256']));
        $body = base64_encode(json_encode($payload));
        $secret = env('JWT_SECRET','123456');

        $signature = hash_hmac('sha256', "$header.$body", $secret, true);
        $signature = base64_encode($signature);

        return "$header.$body.$signature";
    }

    public function logout(Request $request)
    {
        // Revoke the token that was used to authenticate the user
        auth()->user()->tokens()->delete();

        return response()->json(['message' => 'Logged out successfully']);
    }
}
