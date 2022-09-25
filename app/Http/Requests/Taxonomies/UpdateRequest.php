<?php

namespace App\Http\Requests\Taxonomies;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|string',
            'taxonomy_type' => 'required|string',
            'data' => '',
            'data.*' => '',
            'parent_id' =>'required|integer',
            'user_id' => 'required|integer',
        ];
    }
}
