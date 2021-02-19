<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoringBranchRequest extends FormRequest
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
            'name'=>'required|min:5|max:100',
            'address'=>'required|min:5|max:100',
            'phone_no'=>'required|regex:/^(?=.*?[0-9]).{11}$/i|numeric|unique:branches,phone_no,{$this->branch}',
            'clinic'=>'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A name is required',
            'name.min' => 'Name is too short',
            'address.required' => 'Address is required',
            'address.min' => 'Address is too short',
            'phone_no.required' => 'Phone number is required',
            'phone_no.unique' => 'phone number is used before',
            'phone_no.regex'=>'your phone number must be 11 number',

        ];
    }
}
