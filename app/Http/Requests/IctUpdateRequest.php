<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IctUpdateRequest extends FormRequest
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
            'department_id' => 'required',
            'ict_category_id' => 'required',
            'status_id' => 'required',
            'ip_config_id' => 'required',
            'end_user' => 'required',
            'property_no' => 'required',
            'ict_code' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'serial_no' => 'required',
            'address' => 'required',
            'floor' => 'required',
            'manufactured_date' => 'required'
        ];
    }
}
