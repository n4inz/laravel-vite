<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobBoardRequest extends FormRequest
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
            'family' => 'required',
            'title' => 'required|min:3',
            'description' => 'required|min:6',
            'subcategory' => 'required',
            'rate' => 'required',
            'address' => 'required|min:3',
            'status' => 'required',
        ];
    }
}
