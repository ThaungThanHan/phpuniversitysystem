<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createTeacherRequest extends FormRequest
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
            'name' => 'required',
            'position' => 'required',
            'department' => 'required',
            'teacher_id' => 'required',
            'gender' => 'required',
            'father_name' => 'required',
            'birthday' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'teacher_image' => 'required',
        ];
    }
}
