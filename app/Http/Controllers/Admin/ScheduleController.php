<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreScheduleRequest;
use Illuminate\Http\JsonResponse;

class ScheduleController extends Controller
{
    public function store(StoreScheduleRequest $request): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Schedule saved successfully.',
            'data' => $request->validated(),
        ], 201);
    }

    public function destroy(string $event): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Event deleted successfully.',
            'event_id' => $event,
        ]);
    }
}
