<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
                'name' => 'required|string',
                'email' => 'required|email:filter|unique:users,email',
                'password' => 'required',
                'phone_number' => 'required',
                'date_of_birth' => 'date',
                'hometown' => 'string|required',
                'start_date' =>  'date',
                'role_id' => 'required|exists:roles,id',
                'loan_laptop' => 'boolean',
            ];
    }
}
