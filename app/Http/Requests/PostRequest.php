<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{/**
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
            'title' => 'required',
            'content' => 'required|max:140',
          ];
    }

    public function messages()
    {
        return [
            'title.required' => '名前を入力して下さい。',
            'content.required' => '本文を入力して下さい。',
            'content.max' => '本文は140文字以下で入力して下さい。',
        ];
    }
}
