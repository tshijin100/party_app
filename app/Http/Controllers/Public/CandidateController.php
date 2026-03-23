<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class CandidateController extends Controller
{
    public function showByMandalam(string $mandalam): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => [
                'candidate_id' => 'cand_123',
                'name' => 'John Doe',
                'mandalam' => ucfirst($mandalam),
                'party' => 'Independent',
                'biography' => 'Dedicated to community development...',
                'profile_image_url' => url('/images/cand_123.jpg'),
                'contacts' => [
                    'phone' => '+91 98765 43210',
                    'email' => 'contact@johndoe.com',
                    'office_address' => '123 Main St, Kalamassery, Kerala',
                ],
                'social_media' => [
                    'facebook' => 'https://facebook.com/johndoe',
                    'instagram' => 'https://instagram.com/johndoe',
                ],
            ],
        ]);
    }
}
