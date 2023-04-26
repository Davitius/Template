<?php

namespace App\Http\Requests\Constructor;

use Illuminate\Foundation\Http\FormRequest;

class UsefullinksRequest extends FormRequest
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
            'type' => ['required'],
            'image' => ['required'],
            'name_GE' => ['required'],
            'name_EN' => ['required'],
            'name_RU' => ['required'],
            'link' => ['string'],
        ];
    }

    public function messages()
    {
        return [
            'name_GE.required' => 'GE ველის შევსება აუცილებელია.',
            'name_EN.required' => 'EN ველის შევსება აუცილებელია.',
            'name_RU.required' => 'RU ველის შევსება აუცილებელია.',

        ];
    }
}
