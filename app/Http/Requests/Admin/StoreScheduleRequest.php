<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreScheduleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'date' => ['required', 'date'],
            'title' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'start_time' => ['required', 'date'],
            'location_name' => ['required', 'string'],
            'is_public' => ['required', 'boolean'],
        ];
    }
}
