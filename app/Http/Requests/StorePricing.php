<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePricing extends FormRequest
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
            'name_pricing' => 'required',
            'date' => 'required',
            'price' => 'required',
            'featured_1' => 'required',
            'featured_2' => 'required',
            'featured_3' => 'required',
            'featured_4' => 'required',
            'featured_5' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'name_pricing.required' =>'Pricing Name is Required',
            'date.required' =>'Date is Required',
            'price.required' =>'Price is Required',
            'featured_1.required' =>'featured 1 is Required',
            'featured_2.required' =>'featured 2 is Required',
            'featured_3.required' =>'featured 3 is Required',
            'featured_4.required' =>'featured 4 is Required',
            'featured_5.required' =>'featured 5 is Required',

        ];
    }
}
