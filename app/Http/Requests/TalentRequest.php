<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TalentRequest extends FormRequest
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
            // 'avatar' => 'required',
            'first_name' => 'required|min:3',
            'last_name' => 'required',
            'day_of_birthday' => 'required',
            'experience' => 'required',
            'email' => 'required',
            'phone' => 'required|min:5|numeric',
            'address' => 'required|min:5',
            'about_talent' => 'required|min:6',
            // 'attached_file' => 'required|mimes:doc,rar,zip,pdf|max:2048',
            'languages' => 'required',
            'type_helper' => 'required',
            'avatar' => 'mimes:png,jpg,jpeq,PNG,JPG,JPEG,webp|max:126',
            'attached_file' => 'mimes:doc,rar,zip,pdf,txt|max:2048',
        ];
    }
}
