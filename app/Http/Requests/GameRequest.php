<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'genre' => 'required|string',
            'image_url' => 'required|string',
            'singlePlayer' => 'required|boolean',
            'multiPlayer' => 'required|boolean',
            'name' => 'required|string',
            'platform' => 'required|string',
            'release' => 'required|number',
        ];
    }

    public function response(array $errors)
    {
        return response()->json($errors, 422);
    }
}
