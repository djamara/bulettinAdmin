<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class ActiviteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'name' => 'required|min:5|max:255'
            'date_activite'=>'required',
            'date_fin_activite'=>'required',
            'activite_actualite'=>'required',
            'Contenu_activite'=>'required',
            'Defis_activite'=>'required',
            'Besoins_activite'=>'required',
            'Rumeur_activite'=>'required',
            'Question_activte'=>'required',
            'Plaintes_activite'=>'required',
            'Resistance_activite'=>'required',
            'projet_activte'=>'required',
            'impactHomme'=>'numeric|required',
            'impactFemme'=>'numeric|required',
            'impactEnfant'=>'numeric|required'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
            'required'=>'Ces champs doivent être renseignés obligatoirement',
            'numeric'=>'Ces champs doivent prendre des valeurs numériques'
        ];
    }
}
