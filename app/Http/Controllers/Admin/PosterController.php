<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GeneratePosterRequest;
use Illuminate\Http\JsonResponse;

class PosterController extends Controller
{
    public function store(GeneratePosterRequest $request): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Poster generated successfully.',
            'data' => [
                'generated_poster_id' => 'poster_882',
                'download_url' => url('/generated/poster_882_final.jpg'),
                'created_at' => '2026-03-21T10:00:00Z',
                'request' => $request->validated(),
            ],
        ], 201);
    }
}
