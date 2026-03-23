<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class DesignAssetController extends Controller
{
    public function show(string $candidate): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => [
                'candidate_id' => $candidate,
                'theme_colors' => [
                    'primary' => '#FF9933',
                    'secondary' => '#FFFFFF',
                    'accent' => '#138808',
                ],
                'app_icons' => [
                    'android' => url('/assets/icons/cand_123_android.png'),
                    'ios' => url('/assets/icons/cand_123_ios.png'),
                ],
                'background_images' => [
                    'home_screen' => url('/assets/bg/home_cand_123.jpg'),
                    'profile_screen' => url('/assets/bg/profile_cand_123.jpg'),
                ],
            ],
        ]);
    }
}
