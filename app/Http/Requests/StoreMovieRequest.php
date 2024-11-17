<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
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
            'title' => 'required|string',
            'synopsis' => 'required|string',
            'release_year' => 'required|integer',
            'rating' => 'nullable|numeric',
            'duration_min' => 'required|integer',
            'audience' => 'required|string',
            'url_trailer' => 'nullable|string',
            'categories' => 'required|array',
            'actors' => 'required|array',
            'categories.*' => 'exists:categories,id',
            'actors.*' => 'exists:actors,id'
        ];

    }

    public function messages() {
        return [
            'title.request' => 'Título de película no válido',
        ];
    }
}

?>
