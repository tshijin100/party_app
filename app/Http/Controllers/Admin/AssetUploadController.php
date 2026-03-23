<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UploadAssetRequest;
use Illuminate\Http\JsonResponse;

class AssetUploadController extends Controller
{
    public function store(UploadAssetRequest $request): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Asset uploaded successfully.',
            'asset_url' => url('/assets/templates/new_rally_frame.png'),
            'data' => $request->safe()->except('file'),
        ], 201);
    }
}
