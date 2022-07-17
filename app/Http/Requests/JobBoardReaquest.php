<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobBoardReaquest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'id_unique' => 'required|min:3|unique:jobs,id_unique',
            'location' => 'required|min:3',
            // 'status' => 'required',
            'type' => 'required',
        ];
    }
}
