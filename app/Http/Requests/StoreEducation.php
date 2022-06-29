<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEducation extends FormRequest
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
            'name' => 'required',
            'from_education' => 'required|date',
            'to_education' => 'required|date',
            'title' => 'required',
            'univercity_name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'Education Name is Required',
            'from_education.required' =>'Date Education is Required',
            'to_education.required' => 'Date Education is Required',
            'title.required' => 'Title of Education is Required',
            'univercity_name.required' => 'University Name of Education is Required ',
        ];
    }
}
