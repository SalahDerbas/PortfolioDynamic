<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Storeitem extends FormRequest
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
            'name_project_item' => 'required',
            'name_client' => 'required',
            'url' => 'required',
            'descriptions_item' => 'required',
            'date_item' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name_project_item.required' =>'Name Project is Required',
            'name_client.required' =>'Name Client is Required',
            'url.required' => 'URL is Required',
            'descriptions_item.required' => 'Descriptions is Required',
            'date_item.required' => 'Date is Required',
        ];
    }
}
