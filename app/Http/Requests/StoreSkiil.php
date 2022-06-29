<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSkiil extends FormRequest
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
            'position_skill' => 'required',
            'title_skill' => 'required',
            'percentage' => 'required|integer|min:0|max:100',
        ];
    }

    public function messages()
    {
        return [
            'position_skill.required' =>'Position Skill is Required',
            'position_skill.unique' =>'Position Skill is Already exists',
            'title_skill.required' => 'Title Skill is Required',
            'percentage.required' => 'Percentage Skill is Required',
            'percentage.min' => 'Percentage Skill is not less 0 ',
            'percentage.max' => 'Percentage Skill is not more 100 ',
        ];
    }
}
