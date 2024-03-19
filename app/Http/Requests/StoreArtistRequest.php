<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArtistRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'bio' => 'required',
            'address1' => 'required | string',
            'address2' => 'nullable|string',
            'county' => 'required',
            'city' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:artists',
            'website' => 'nullable',
            'contact_name' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name field must be a string.',
            'name.max' => 'The name field must not exceed 255 characters.',
            'bio.required' => 'The bio field is required.',
            'address1.required' => 'The address field is required.',
            'postcode.required' => 'The postcode field is required.',
            'phone.required' => 'The phone field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'The email address is already in use.',
            'contact_name.required' => 'The contact name field is required.'
        ];
    }
}
