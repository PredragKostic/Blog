<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
           'title' => 'required|max:255',
           'summary' => 'required|max:255',
           'content' => 'required',
           'category_id' => 'required|numeric',
           'published_at' => 'required',
           'views' => 'required',
           'image1' => 'image',
           'image2' => 'image',
        ];
    }
}
