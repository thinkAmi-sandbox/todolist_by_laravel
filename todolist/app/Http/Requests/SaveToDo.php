<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Foundation\Http\FormRequest;

class SaveToDo extends FormRequest
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
            'title' => ['max:50', new Uppercase],
            'priority' => ['integer'],
        ];
    }

    public function messages()
    {
        return [
            'priority.integer' => '優先度は数字で入力してください',
        ];
    }
}
