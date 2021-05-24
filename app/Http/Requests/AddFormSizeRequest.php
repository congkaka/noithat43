<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class AddFormSizeRequest extends FormRequest
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
            'name.required' => 'Hay nhap Size',
            'name.min' => 'Nhap toi thieu 5 ky tu',
            'name.unique' => 'Size da ton tai',
            'price.required' => 'Hay nhap gia',
            'price.numeric' => 'Hay nhap so'
        ];
    }
}
