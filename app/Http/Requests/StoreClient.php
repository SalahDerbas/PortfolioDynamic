<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClient extends FormRequest
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
            'name_client' => 'required',
            'position_client' => 'required',
            'title_client' => 'required',
            'facebook' => 'required',
            'instegram' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name_client.required' =>'Name Client is Required',
            'position_client.required' =>'Position Client is Required',
            'title_client.required' => 'Title Client is Required',
            'facebook.required' => 'Facebook Clientis Required',
            'instegram.required' => 'Instegram Client is Required',
        ];
    }
}
