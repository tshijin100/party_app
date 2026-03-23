<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreManifestoRequest;
use Illuminate\Http\JsonResponse;

class ManifestoController extends Controller
{
    public function store(StoreManifestoRequest $request): JsonResponse
    {
        return response()->json([
            'success' => true,
            'document_id' => 'doc_03',
            'message' => 'Manifesto uploaded successfully.',
            'data' => $request->safe()->except('file'),
        ], 201);
    }
}
