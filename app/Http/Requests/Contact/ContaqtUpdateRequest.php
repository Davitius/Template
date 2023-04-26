<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContaqtUpdateRequest extends FormRequest
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
            'address_GE' => ['required'],
            'address_EN' => ['required'],
            'address_RU' => ['required'],
            'phone' => ['string'],
            'email' => ['string'],
        ];
    }

    public function messages()
    {
        return [
            'address_GE.required' => 'GE ველის შევსება აუცილებელია.',
            'address_EN.required' => 'EN ველის შევსება აუცილებელია.',
            'address_RU.required' => 'Link ველის შევსება აუცილებელია.',
            'phone.required' => 'EN ველის შევსება აუცილებელია.',
            'email.required' => 'Link ველის შევსება აუცილებელია.',
        ];
    }
}
