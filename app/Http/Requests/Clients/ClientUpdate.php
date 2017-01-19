<?php

namespace App\Http\Requests\Clients;

use App\Http\Requests\Request;

class ClientUpdate extends Request
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
            'id' => 'required|exists:clients',
            'name' => 'required',
            'email_address' => 'required|email',
        ];
    }
}
