<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PosterTemplateController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => [[
                'template_id' => 'temp_001',
                'category' => $request->string('category')->toString() ?: 'festival',
                'title' => 'Onam Wishes Frame',
                'thumbnail_url' => url('/templates/thumb_onam.jpg'),
                'frame_url' => url('/templates/frame_onam.png'),
                'text_placeholder_coordinates' => ['x' => 150, 'y' => 800],
            ]],
        ]);
    }
}
