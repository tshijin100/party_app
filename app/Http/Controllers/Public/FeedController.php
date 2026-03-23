<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function index(Request $request, string $candidate): JsonResponse
    {
        return response()->json([
            'success' => true,
            'page' => (int) $request->integer('page', 1),
            'data' => [[
                'feed_id' => 'feed_001',
                'title' => 'Inauguration of New Road',
                'description' => 'Attended the opening ceremony of the new bypass...',
                'date' => '2026-03-20T10:00:00Z',
                'images' => [url('/images/feed1_a.jpg')],
                'candidate_id' => $candidate,
            ]],
        ]);
    }
}
