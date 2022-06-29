<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExperience extends FormRequest
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
        return [
            'position_experience' => 'required',
            'from_experience' => 'required|date',
            'to_experience' => 'required|date',
            'company_name' => 'required',
            'title_experience' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'position_experience.required' =>'Position Experience is Required',
            'from_experience.required' =>'Date Experience is Required',
            'to_experience.required' => 'Date Experience is Required',
            'title_experience.required' => 'Title of Experience is Required',
            'company_name.required' => 'Company Name of Experience is Required ',
        ];
    }
}
