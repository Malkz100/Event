<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVenueRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'address1' => 'required',
            'address2' => 'nullable|string',
            'county' =>'required',
            'city'=>'required',
            'postcode'=>'required',
            'venue_phone'=>'required',
            'email'=>'required|email|unique:venues',
            'website'=>'nullable',
            'contact_name'=>'required',
            'capacity'=> 'nullable|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name field must be a string.',
            'name.max' => 'The name field must not exceed 255 characters.',
            'description.required' => 'The description field is required.',
            'address1.required' => 'The address field is required.',
            'postcode.required' => 'The postcode field is required.',
            'venue_phone.required' => 'The venue phone field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'The email address is already in use.',
            'contact_name.required' => 'The contact_name field is required.',
            'capacity.integer'=> 'The capacity must be an integer'
        ];
    }
}
