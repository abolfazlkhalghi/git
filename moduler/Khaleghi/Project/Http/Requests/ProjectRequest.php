<?php

namespace Khaleghi\Project\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Khaleghi\Project\Models\Project;
use Khaleghi\Project\Rules\ValidOperator;

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
            'name' => 'required|min:3|max:190',
            'slug' => 'required|min:3|max:190|unique:projects,slug',
            'prioity' => 'nullable|numeric',
            'price' => 'require|numeric|min:0|max:9999999999',
            'percent' => 'require|numeric|min:0|max:100',
            "operator"=>['required','exists:Users,id', new ValidOperator()],
            'status' => ["require",Rule::in(Project::$statuses)],
            "category_id" =>"required|exists:categories,id",
            "image"=>"required|mimes:png,jpg,jpeg",
        ];
}
}
