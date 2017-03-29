<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTask extends FormRequest
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
            'task_name' => 'required',
            'image' => 'required',
            'image' => 'image'
        ];
    }

    public function messages()
    {
        return [
        'task_name.required' => 'Task name is required',
        
        ];
    }
}
