<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|max:1000',
            'preview' => 'required|max:1000',
            'text' => 'required|max:1000',
            'image' => 'nullable|image',
        ];
    }
}
