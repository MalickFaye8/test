<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class chauffeurRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'matricule_chauf' => 'required',
            'name_chauf' => 'required',
            'tel_chauf' => 'required', 
            'date_chauf' => 'required',
            'cni_chauf' => 'required',
            'type_permis' => 'required', // Validating the selected type of permis
            'status_chauf' => 'required|', // Ensures only 'interne' or 'externe' is selected
            'nom_societe' => 'nullable', // Only required if status is 'externe'
                
        ];
    }
}
