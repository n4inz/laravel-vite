<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'agency_name' => 'required|min:3',
            // 'url_ending_legal' => 'required', 
            'company_description' => 'required|min:10',
            // 'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'chile_care_category' OR 'senior_care_category.*' OR 'home_care_category.*' OR 'other_category.*' =>  'required',
            // 'chile_care_category.*' =>  'required_with:senior_care_category.*,home_care_category.*,other_category.*',
            // 'senior_care_category.*' =>  'required_with:chile_care_category.*,home_care_category.*,other_category.*',
            // 'home_care_category.*' =>  'required_with:chile_care_category.*,senior_care_category.*,other_category.*',
            // 'other_category.*' =>  'required_with:chile_care_category.*,senior_care_category.*,home_care_category.*',

            'service_type' => 'required',
            // 'status' => 'required',
            'status_talent' => 'required',
            'location' => 'required',
            // 'aplication_fee' => 'numeric',
            // 'placement_fee' => 'numeric',
            // 'hourly_rate' => 'numeric'
        ];
    }
}
