<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AddFormCategoryRequest extends FormRequest
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
                'max:20',
                Rule::unique('categories')->ignore($this->id),

            ],
            'slug' => [
                'required'
            ]
        ];

        return $validate;
    }

    public function messages(){
        return[
            'name.required' => 'Vui long nhap ten',
            'name.min' => 'Ten toi thieu phai 5 ky tu',
            'name.max' => 'Ten khong dc qua 20 ky tu',
            'name.unique' => 'Ten da ton tai',
            'slug.required' => 'Vui long nhap slug',
        ];
    }
}
