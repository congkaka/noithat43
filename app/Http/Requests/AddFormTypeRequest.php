<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class AddFormTypeRequest extends FormRequest
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
                'min:5',
                Rule::unique('types')->ignore($this->id)
            ],
            'image' => [
                Rule::requiredIf(!$this->id),
                'image'
            ],
            'price' => [
                'required',
                'numeric'
            ]
        ];


        return $validate;
    }

    public function messages()
    {
        return [
            'name.required' => 'Hay nhap ten',
            'name.min' => 'Nhap toi thieu 5 ky tu',
            'name.unique' => 'Ten da ton tai',
            'image.required' => 'Hay chon anh',
            'image.image' => 'Hay nhap dung dinh dang image (jpg, png, webp)',
            'price.required' => 'Hay nhap gia',
            'price.numeric' => 'Hay nhap so'
        ];
    }
}
