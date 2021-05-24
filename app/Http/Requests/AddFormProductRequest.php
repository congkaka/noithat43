<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class AddFormProductRequest extends FormRequest
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
                'max:50',
                Rule::unique('products')->ignore($this->id)
            ],
            'image.0' => [
                Rule::requiredIf(!$this->id),
                'image'
            ],
            'price' => [
                'required',
                'numeric'
            ],
            'type.name.*' => [
                'required',
            ],
            'type.price.*' => [
                'required',
                'numeric'
            ],
            'type.file.*' => [
                Rule::requiredIf(!$this->id),
                'image'
            ],
            'size.name.*' => [
                'required',
            ],
            'size.price.*' => [
                'required',
                'numeric'
            ],
            'exist' => [
                'required',
                'numeric'
            ],
            'category_id' => [
                'required'
            ]
        ];

        return $validate;
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui long nhap ten',
            'name.min' => 'Ten toi thieu phai 5 ky tu',
            'name.max' => 'Ten khong dc qua 50 ky tu',
            'name.unique' => 'Ten da ton tai',
            'image.0.required' => 'Vui long chon anh',
            'image.0.image' => 'Vui long chon dung dinh dang anh (jpg, png, webp)',
            'price.required' => 'Vui long nhap gia',
            'price.numeric' => 'Vui long nhap ky tu so',
            'type.name.*.required' => 'Vui long nhap ten type',
            'type.price.*.required' => 'Vui long nhap gia type',
            'type.price.*.numeric' => 'Vui long nhap ky tu so',
            'type.file.*.required' => 'Vui long chon anh',
            'type.file.*.image' => 'Vui long chon dung dinh dang anh (jpg, png, webp)',
            'size.name.*.required' => 'Vui long nhap ten size',
            'size.price.*.required' => 'Vui long nhap gia size',
            'size.price.*.numeric' => 'Vui long nhap ky tu so',
            'exist.required' => 'Vui long nhap so luong',
            'exist.numeric' => 'Vui long nhap ky tu so',
            'category_id.required' => 'Vui long chon danh muc',
        ];
    }
}
