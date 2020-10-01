<?php

namespace Modules\Saller\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SallerRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'name' => 'required|string|max:255',
            'login' => 'required|string|max:255|unique:sallers,login'.(isset($this->id)?','.$this->id.',id':''),
            'email' => 'nullable|string|email|max:255|unique:sallers,email'.(isset($this->id)?','.$this->id.',id':''),       // se a validação agarrar colocar regra nullable
            'password' => (isset($this->id)?'nullable|':'').'string|min:4|max:255',
            'goal' => 'required|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
