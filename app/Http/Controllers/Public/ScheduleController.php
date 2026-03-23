<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(Request $request, string $candidate): JsonResponse
    {
        return response()->json([
            'success' => true,
            'candidate_id' => $candidate,
            'date' => $request->query('date', '2026-03-21'),
            'data' => [
                [
                    'event_id' => 'ev_101',
                    'time' => '09:00 AM',
                    'title' => 'Morning Walk & Voter Interaction',
                    'location_name' => 'Kalamassery Municipal Park',
                    'is_public' => true,
                    'coordinates' => ['lat' => 10.05, 'lng' => 76.32],
                ],
                [
                    'event_id' => 'ev_102',
                    'time' => '02:30 PM',
                    'title' => 'Inauguration of Kudumbashree Unit',
                    'location_name' => 'Ward 14 Community Hall',
                    'is_public' => true,
                    'coordinates' => ['lat' => 10.06, 'lng' => 76.33],
                ],
            ],
        ]);
    }
}
