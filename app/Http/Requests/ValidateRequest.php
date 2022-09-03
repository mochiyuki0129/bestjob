<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
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
            'name' => 'required',
            'kana' => 'required',
            'email' => 'required',
            'password' => 'required',
            'tel' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'area' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必須入力です',
            'kana.required' => 'フリガナは必須入力です',
            'email.required' => 'メールアドレスは必須入力です',
            'password.required' => 'パスワードは必須入力です',
            'tel.required' => '電話番号は必須入力です',
            'age.required' => '年齢は必須入力です',
            'gender.required' => '性別は必須入力です',
            'area.required' => '勤務希望地は必須入力です'
        ];
    }
}
