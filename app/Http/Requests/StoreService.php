<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreService extends FormRequest
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
            'name_service' => 'required',
            'title_service' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name_service.required' =>'Name Service is Required',
            'title_service.required' =>'Title Service is Required',
        ];
    }
}
