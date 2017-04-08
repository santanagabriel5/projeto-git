<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DisciplinasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo' => 'required|max:100',
            'cargah' => 'required|numeric',
            'codProfessor' => 'required|numeric',
            'inicio' => 'required|date',
            'fim' => 'required|date'
        ];
    }

    public function messages(){
      return [
        'nome.required' => 'The :attribute field can not be empty.',
      ];
    }
}
