<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ManifestoController extends Controller
{
    public function index(string $candidate): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => [[
                'document_id' => 'doc_01',
                'candidate_id' => $candidate,
                'title' => 'Education Plan 2026',
                'type' => 'pdf',
                'url' => url('/docs/manifesto_edu.pdf'),
                'uploaded_at' => '2026-02-15T08:00:00Z',
            ]],
        ]);
    }
}
