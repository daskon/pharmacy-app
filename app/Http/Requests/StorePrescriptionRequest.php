<?php

namespace App\Http\Requests;

use App\Rules\Maxupload;
use Illuminate\Foundation\Http\FormRequest;

class StorePrescriptionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'note' => 'required',
            'address' => 'required',
            'time' => 'required',
            'images' => ['bail','required', new Maxupload],
            'images.*' => ['bail', 'image', 'mimes:jpeg,jpg,png|max:2048']
        ];
    }
}
