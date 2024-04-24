<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required',
            'venue_id' => 'required',
            'start_datetime' => 'required',
            'end_datetime' => 'nullable|after:start_datetime',
            'price' => 'nullable|numeric|min:0',
            'reduced_price'  => 'nullable|numeric|min:0'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title field is required.',
            'title.string' => 'The title field must be alpha/numeric.',
            'description.required' => 'Please provide a description of the event.',
            'venue_id' => 'Please select a venue.',
            'start_datetime' => 'Please enter a start date/time for the event.',
            'end_datetime' => 'The end date/time must be after the start date/time.',
        ];
    }
}
