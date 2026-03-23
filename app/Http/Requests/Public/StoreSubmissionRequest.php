<?php

namespace App\Http\Requests\Public;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSubmissionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'type' => ['required', 'string', Rule::in(['suggestion', 'complaint', 'request'])],
            'description' => ['required', 'string'],
            'sender_name' => ['nullable', 'string'],
            'sender_contact' => ['nullable', 'string'],
            'photo' => ['nullable', 'file', 'mimes:jpg,jpeg,png'],
        ];
    }
}
