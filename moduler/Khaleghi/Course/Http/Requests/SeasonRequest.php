<?php
namespace Khaleghi\Course\Http\Requests;

use Khaleghi\Course\Models\Course;
use Khaleghi\Course\Rules\ValidTeacher;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SeasonRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check() == true;
    }

    public function rules()
    {
        return [
            "title" => 'required|min:3|max:190',
            "number" => 'nullable|numeric|min:0|max:250',
        ];
    }

    public function attributes()
    {
        return [
            "title" => "عنوان فصل",
            "number" => "شماره فصل",
        ];
    }
}
