<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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

    /*Reglas de validaciones
    para el envio de información
    de los formularios :)
    */
    public function rules()
    {
        //http://laravel.com/docs/5.4/
        return [
            'content' => 'required'
        ];
    }
}
