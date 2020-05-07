<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LinesRequest extends FormRequest
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
            'line_id' => 'required|integer',
            'from_city_id' => 'required|integer',
            'to_city_id' => 'required|integer',
        ];
    }
}
