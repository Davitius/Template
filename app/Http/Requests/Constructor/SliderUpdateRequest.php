<?php

namespace App\Http\Requests\Constructor;

use Illuminate\Foundation\Http\FormRequest;

class SliderUpdateRequest extends FormRequest
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
            'image' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'color.image' => 'ველის შევსება აუცილებელია.',
        ];
    }
}