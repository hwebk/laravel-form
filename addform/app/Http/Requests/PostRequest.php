<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'name' => 'required|max:100',
            'tel'  => 'required|max:50',
            'email' => 'required|email',
            'content' => 'max:1000'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '氏名を入力してください。',
            'nema.max'  => '氏名は100文字以内で入力してください。',
            'tel.required'  => '電話番号を入力してください。',
            'tel.max'   => '電話番号は50文字以内で入力してください。',
            'email.required' => 'メールアドレスを入力してください。',
            'email.email'   => 'メールアドレスは正しいメールアドレス形式で入力してください。',
            'content.max'   => 'お問い合わせ内容は1000文字以内で入力してください。'
        ];
    }
}
