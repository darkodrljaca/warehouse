<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CityUpdateRequest extends FormRequest
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
            'country_id' => ['required', 'integer'],
            'name' => ['required', Rule::unique('cities')->ignore($this->city)->whereNull('deleted_at')]
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
