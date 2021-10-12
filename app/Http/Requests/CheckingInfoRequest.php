<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckingInfoRequest extends FormRequest
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
            'Name' =>'min:4' ,'max:225' ,'string',
            'Phone'=>'min:8','phone',
            'Address'=>'min:5','max:255',
            'Email'=>'min:5','email'
        ];
    }
}
