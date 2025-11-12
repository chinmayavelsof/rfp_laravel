<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendorRegisterRequest extends FormRequest
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
            'firstname' => 'required|string|max:100',
            'lastname' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:12|confirmed',
            'password_confirmation' => 'required',
            'revenue' => 'required|numeric',
            'noofemployees' => 'required|integer|min:1',
            'gstno' => 'required|string|max:20',
            'panno' => 'required|string|max:20',
            'phoneno' => 'required|string|max:15',
            'categories' => 'required|array|min:1',
        ];
    }

    public function messages(): array
    {
        return [
            'firstname.required' => 'First name is required',
            'lastname.required' => 'Last name is required',
            'email.unique' => 'Email already registered',
            'password.confirmed' => 'Passwords do not match',
            'categories.required' => 'Please select at least one category',
        ];
    }
}
