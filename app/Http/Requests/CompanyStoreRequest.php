<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CompanyStoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255', 
                            Rule::unique('companies')->whereNull('deleted_at')],
            'city_id' => ['required'],                        
            'maticni_broj' => ['required', Rule::unique('companies')->whereNull('deleted_at')],
            'pib' => ['required', Rule::unique('companies')->whereNull('deleted_at')],                             
            'sifra_delatnosti' => ['required'],            
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Назив је обавезан.',
            'name.unique' => 'Назив већ постоји.',
            'maticni_broj.required' => 'Матични број је обавезан.',
            'maticni_broj.unique' => 'Матични број већ постоји.',
            'pib.required' => 'ПИБ је обавезан.',
            'pib.unique' => 'ПИБ већ постоји.',
            'city_id.required' => 'Град је обавезан.',         
        ];
    }
}
