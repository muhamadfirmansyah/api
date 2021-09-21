<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Tymon\JWTAuth\Facades\JWTAuth;

class MovieRequest extends FormRequest
{
    protected $user;

    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->user) {
            return true;
        }
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
            'description' => 'required|string',
            'duration' => 'required|integer',
            'genre' => 'required|string',
            'image_url' => 'required|string',
            'rating' => 'required|integer',
            'review' => 'required|string',
            'title' => 'required|string',
            'year' => 'required|integer',
        ];
    }

    public function response(array $errors)
    {
        return response()->json($errors, 422);
    }
}
