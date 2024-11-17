<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketTypeRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'discount' => 'required|integer|between:0,100',
            'promotion' => 'nullable|string|max:255'
        ];
    }

    public function messages() {
        return [
            'discount.request' => 'Debe ser un número entre 0 y 100',
        ];
    }
}
