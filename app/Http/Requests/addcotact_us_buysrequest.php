<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class addcotact_us_buysrequest extends FormRequest
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
            'name'      =>  'required|string|max:256',
            'email'     =>  'required|email|max:256',
            'message'   =>  'required|string',
            'phone'     =>  'required|numeric',
            'project_id'=>  'required|numeric',
        ];
    }
}
