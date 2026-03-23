<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Http\Requests\Public\StoreSubmissionRequest;
use Illuminate\Http\JsonResponse;

class SubmissionController extends Controller
{
    public function store(StoreSubmissionRequest $request, string $candidate): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Your submission has been received successfully.',
            'candidate_id' => $candidate,
        ], 201);
    }
}
