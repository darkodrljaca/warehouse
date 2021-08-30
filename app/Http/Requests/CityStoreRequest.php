<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CityStoreRequest extends FormRequest
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
            'country_id' => ['required'],
            'name' => ['required', Rule::unique('cities')->whereNull('deleted_at')]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Назив је обавезан.',
            'name.unique' => 'Назив већ постоји.'         
        ];
    }
}
