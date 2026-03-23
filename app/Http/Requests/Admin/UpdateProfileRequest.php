<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'biography' => ['nullable', 'string'],
            'contacts' => ['nullable', 'array'],
            'contacts.phone' => ['nullable', 'string'],
            'contacts.email' => ['nullable', 'email'],
            'contacts.office_address' => ['nullable', 'string'],
            'social_media' => ['nullable', 'array'],
            'social_media.facebook' => ['nullable', 'url'],
            'social_media.instagram' => ['nullable', 'url'],
        ];
    }
}
