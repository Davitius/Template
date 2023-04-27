<?php

namespace App\Http\Requests\Posts;

use Illuminate\Foundation\Http\FormRequest;

class NewPostRequest extends FormRequest
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
            'image' => ['sometimes'],
            'title_ge' => ['string', 'required'],
            'title_en' => ['string', 'required'],
            'title_ru' => ['string', 'required'],
            'text_ge' => ['string', 'required'],
            'text_en' => ['string', 'required'],
            'text_ru' => ['string', 'required'],
            'type' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'color.require' => 'ველის შევსება აუცილებელია.',
            'type.required' => 'აირჩიეთ ტიპი!',
        ];
    }
}
