<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
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
            'event_id' => 'required',
            'customer_id' => 'required',
            'booked_at' => 'required',
            'tickets_full_price' =>'numeric|min:0',
            'tickets_reduced_price' =>'numeric|min:0'
        ];
    }

    public function messages()
    {
        return [
//            'name.required' => 'The name field is required.',
//            'name.string' => 'The name field must be a string.',
//            'name.max' => 'The name field must not exceed 255 characters.',
//            'email.required' => 'The email field is required.',
//            'email.email' => 'Please enter a valid email address.',
//            'email.unique' => 'The email address is already in use.',
//            'password.required' => 'The password field is required.',
//            'password.string' => 'The password field must be a string.',
//            'password.min' => 'The password must be at least 8 characters long.',
//            'password.confirmed' => 'The password confirmation does not match.',
        ];
    }
}
