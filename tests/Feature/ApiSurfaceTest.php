<?php

use PHPUnit\Framework\TestCase;

final class ApiSurfaceTest extends TestCase
{
    public function test_api_routes_documented_in_readme(): void
    {
        $readme = file_get_contents(__DIR__ . '/../../README.md');

        $this->assertStringContainsString('GET /api/v1/public/mandalam/{mandalam}/candidate', $readme);
        $this->assertStringContainsString('POST /api/v1/auth/login', $readme);
        $this->assertStringContainsString('POST /api/v1/admin/posters/generate', $readme);
        $this->assertStringContainsString('DELETE /api/v1/admin/schedule/{event}', $readme);
    }

    public function test_routes_file_contains_candidate_modules(): void
    {
        $routes = file_get_contents(__DIR__ . '/../../routes/api.php');

        $this->assertStringContainsString("Route::prefix('public')", $routes);
        $this->assertStringContainsString("Route::middleware('auth:api')->prefix('admin')", $routes);
        $this->assertStringContainsString("Route::post('posters/generate'", $routes);
    }
}
