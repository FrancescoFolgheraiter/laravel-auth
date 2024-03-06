<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'thumb' => 'nullable|url',
            'description' => 'nullable|max:5000',
            'technologies' => 'required|string|max:255',
            'start_date' => 'required|date',
            'last_update_date' => 'nullable|date',
            'total_hours' => 'nullable|numeric|max:999',
        ];
    }
}
