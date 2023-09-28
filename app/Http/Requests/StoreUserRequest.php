<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if (request()->isMethod('post')) {
            return [
                'name' => 'required|string|max:255',
                'image' => 'required|string',
                'email' => 'required|email',
                'password' => 'required',
                'phone' => 'required|string',
                'address' => 'required|string',
                'gender' => 'required'
            ];
        } else {
            return [
                'name' => 'required|string|max:255',
                'image' => 'nullable',
                'email' => 'required|email',
                'phone' => 'required|string',
                'address' => 'required|string',
                'gender' => 'required'
            ];
        }
    }
}
