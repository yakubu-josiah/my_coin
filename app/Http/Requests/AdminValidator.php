<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminValidator extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'bail|required|email',
            'firstname' => 'bail|required|max:20|min:5',
            'lastname' => 'bail|required|max:20|min:5',
            'number' => 'bail|required|',
            'password' => 'required|min:6'
        ];
    }
}
