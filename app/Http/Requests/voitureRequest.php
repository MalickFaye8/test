<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class voitureRequest extends FormRequest
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
            'type_vehicule' => 'nullable|string', // Nullable string field
            'marque' => 'nullable|string', // Nullable string field
            'modele' => 'nullable|string', // Nullable string field
            'matricule' => 'nullable|string', // Nullable string field
            'gamme' => 'nullable|string', // Nullable string field
            'etat_vehicule' => 'nullable|string', // Nullable string field
            'annee_acquisition' => 'nullable|date', // Nullable date field
            'valeur_net_comptable' => 'nullable|numeric', // Nullable numeric field
            'annee_affectation' => 'nullable|date', // Nullable date field
            'lieu_affectation' => 'nullable|string', // Nullable string field
            'nature_vehicule' => 'nullable|string', // Nullable string field
            'kilometrage' => 'nullable|numeric', // Nullable numeric field
            'capacite_reservoir' => 'nullable|integer', // Nullable integer field
            'sources_energie' => 'nullable|string', // Nullable string field
            'name_assureur' => 'nullable|string', // Nullable string field
            'date_expiration_assurance' => 'nullable|date', // Nullable date field
            'expiration_visite_technique' => 'nullable|date', // Nullable date field
            'date_expiration_carte_rose' => 'nullable|date', // Nullable date field
            'photos' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Nullable image field with basic validation
        ];
    }
}
