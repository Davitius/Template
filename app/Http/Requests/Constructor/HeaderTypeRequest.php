<?php

namespace App\Http\Requests\Constructor;

use Illuminate\Foundation\Http\FormRequest;

class HeaderTypeRequest extends FormRequest
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
            'visible' => ['sometimes'],
        ];
    }

//    public function messages()
//    {
//        return [
//            'visible.image' => 'ველის შევსება აუცილებელია.',
//        ];
//    }
}
