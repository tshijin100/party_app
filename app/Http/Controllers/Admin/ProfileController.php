<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateProfileRequest;
use Illuminate\Http\JsonResponse;

class ProfileController extends Controller
{
    public function update(UpdateProfileRequest $request): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Profile updated successfully.',
            'data' => $request->validated(),
        ]);
    }
}
