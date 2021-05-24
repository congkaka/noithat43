<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class AddFormImgproductRequest extends FormRequest
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
            'image' => [
                Rule::requiredIf(!$this->id),
                'image'
            ],
            'pro_id' => [
                'required'
            ]
        ];


        return $validate;
    }

    public function messages()
    {
        return [
            'image.required' => 'Hay chon anh',
            'image.image' => 'Hay nhap dung dinh dang image (jpg, png, webp)',
            'pro_id.required' => 'Hay chon san pham',
        ];
    }
}
