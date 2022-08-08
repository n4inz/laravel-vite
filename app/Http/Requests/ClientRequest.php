<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|unique:clients,email|unique:users,email',
            'phone' => 'required|min:3|numeric',
            'address' => 'required|min:3',
            'languages' => 'required',
            'note' => 'required|min:255',
            'avatar' => 'mimes:png,jpg,jpeq,PNG,JPG,JPEG,webp|max:126',
            'attached_file' => 'mimes:doc,rar,zip,pdf,txt|max:2048',
        ];
    }
}
