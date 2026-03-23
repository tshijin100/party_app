<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreFeedRequest;
use Illuminate\Http\JsonResponse;

class FeedController extends Controller
{
    public function store(StoreFeedRequest $request): JsonResponse
    {
        return response()->json([
            'success' => true,
            'feed_id' => 'feed_002',
            'message' => 'Feed created successfully.',
            'data' => $request->safe()->except('images'),
        ], 201);
    }
}
