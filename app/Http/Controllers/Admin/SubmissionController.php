<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        return response()->json([
            'success' => true,
            'filters' => $request->only(['type', 'status']),
            'data' => [[
                'submission_id' => 'sub_991',
                'type' => 'complaint',
                'description' => 'Streetlight is not working on 4th Avenue.',
                'sender_name' => 'Anonymous',
                'sender_contact' => null,
                'photo_url' => url('/submissions/complaint1.jpg'),
                'submitted_at' => '2026-03-21T08:30:00Z',
                'status' => 'pending',
            ]],
        ]);
    }
}
