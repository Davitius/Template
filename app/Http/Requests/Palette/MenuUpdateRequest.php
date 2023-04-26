<?php

namespace App\Http\Requests\Palette;

use Illuminate\Foundation\Http\FormRequest;

class MenuUpdateRequest extends FormRequest
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
            'backcolor' => ['string', 'required'],
            'color' => ['string', 'required'],
            'hovercolor' => ['string', 'required'],
        ];
    }

    public function messages()
    {
        return [
            'color.require' => 'ველის შევსება აუცილებელია.',
        ];
    }

}
