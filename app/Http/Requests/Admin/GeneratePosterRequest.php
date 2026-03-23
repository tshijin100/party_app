<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GeneratePosterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'template_id' => ['required', 'string'],
            'custom_text' => ['required', 'string'],
            'include_candidate_photo' => ['required', 'boolean'],
        ];
    }
}
