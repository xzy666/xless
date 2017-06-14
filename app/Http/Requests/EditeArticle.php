<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditeArticle extends FormRequest
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
           'title'=>'required|max:50',
            'img'=>'url',
            'published_at'=>'date',
            'content'=>'required',
        ];
    }
}
