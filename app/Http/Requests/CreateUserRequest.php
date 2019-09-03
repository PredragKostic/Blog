<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:3|max:16',
            'image' => 'image|mimes:jpg,jpeg,png,gif|size:2048',
            'admin' => 'required',


        ];
    }
}
