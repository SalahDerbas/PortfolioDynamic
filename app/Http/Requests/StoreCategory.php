<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
{/**
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
        return [
            'name_category' => 'required',
            'title_category' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name_category.required' =>'Name Category is Required',
            'title_category.required' =>'Position Category is Required',
        ];
    }
}
