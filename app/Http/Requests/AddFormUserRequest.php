<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class AddFormUserRequest extends FormRequest
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
        $validate = [
            'name' => [
                'required',
                'min:5'
            ],
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($this->id)
            ],
            'password' => [
                Rule::requiredIf(!$this->id)
            ],
            'avatar' => [
                'image'
            ],
            'number' => [
                'max:12'
            ]
        ];


        return $validate;
    }

    public function messages()
    {
        return [
            'name.required' => 'Hay nhap ten',
            'name.min' => 'Nhap toi thieu 5 ky tu',
            'email.required' => 'Hay nhap email',
            'email.email' => 'Hay nhap dung dinh dang email (VD:example@gmail.com)',
            'email.unique' => 'Email da ton tai',
            'password.required' => 'Hay nhap mat khau',
            'avatar.image' => 'Vui long chon dung dinh dang anh (jpg, png, webp)',
            'number.max' => 'Khong nhap qua 12 ky tu'
        ];
    }
}
