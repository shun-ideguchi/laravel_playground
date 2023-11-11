<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:8|confirmed',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes(): array
    {
        return [
            'name' => '名前',
            'email' => 'メールアドレス',
            'password' => 'パスワード',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => ':attributeを指定してください',
            'name.max' => ':attributeは100文字以内で入力してください',
            'email.required' => ':attributeを指定してください',
            'email.max' => ':attributeは100文字以内で入力してください',
            'email.unique' => 'この:attributeは存在します。別の:attributeを指定してください',
            'password.required' => ':attributeを指定してください',
            'password.min' => ':attributeは8文字以上で指定してください',
            'password.confirmed' => ':attributeが一致しません',
        ];
    }
}
