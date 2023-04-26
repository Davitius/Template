<?php

namespace App\Http\Requests\Palette;

use Illuminate\Foundation\Http\FormRequest;

class UlUpdateRequest extends FormRequest
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
            'title_GE' => ['string', 'required'],
            'title_EN' => ['string', 'required'],
            'title_RU' => ['string', 'required'],
            'backcolor' => ['string', 'required'],
            'color' => ['string', 'required'],
            'size' => ['string', 'required'],
            'visible' => ['string'],
        ];
    }

    public function messages()
    {
        return [
            'color.require' => 'ველის შევსება აუცილებელია.',
        ];
    }
}
