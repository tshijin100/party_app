<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\JsonResponse;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request): JsonResponse
    {
        return response()->json([
            'success' => true,
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.demo-token',
            'expires_in' => (int) config('candidate.jwt_ttl', 3600),
            'candidate_id' => 'cand_123',
        ]);
    }
}
