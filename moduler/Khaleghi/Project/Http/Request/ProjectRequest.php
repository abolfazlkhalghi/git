<?php

namespace Khaleghi\Project\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check() == true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:190',
            'slug' => 'required|max:190',
            'dictionary' => 'nullable|exists:categories,id',
            'capital_required' => 'required',
            'amountMain' => 'required',
            'AstanQuds' => 'required',
            'position' => 'required',
            'Phase' => 'required',
            'author' => 'required',

        ];
    
    }
}
