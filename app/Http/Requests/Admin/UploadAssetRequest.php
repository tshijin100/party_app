<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UploadAssetRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'asset_type' => ['required', 'string', Rule::in(['template', 'background', 'icon'])],
            'category' => ['nullable', 'string'],
            'file' => ['required', 'file', 'mimes:png,jpg,jpeg'],
        ];
    }
}
