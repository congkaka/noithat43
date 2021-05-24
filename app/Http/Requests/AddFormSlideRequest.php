<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class AddFormSlideRequest extends FormRequest
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
            'title' => [
                'required',
                'min:5',
                Rule::unique('slides')->ignore($this->id)
            ],
            'image' => [
                Rule::requiredIf(!$this->id),
                'image'
            ],
            'order_num' => [
                'required',
                'numeric'
            ]
        ];


        return $validate;
    }

    public function messages()
    {
        return [
            'title.required' => 'Hay nhap tieu de',
            'title.min' => 'Nhap toi thieu 5 ky tu',
            'title.unique' => 'Tieu de da ton tai',
            'image.required' => 'Hay chon anh',
            'image.image' => 'Hay nhap dung dinh dang image (jpg, png, webp)',
            'order_num.required' => 'Hay nhap so thu tu',
            'order_num.numeric' => 'Hay nhap so'
        ];
    }
}
