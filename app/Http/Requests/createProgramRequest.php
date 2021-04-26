<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createProgramRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'program_type'=>'required',
            'host_country' => 'required',
            'eligible_country' => 'required',
            'deadline' => 'required',
            'duration' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'program_image' => 'required',
            'admin' => 'required',
            'benefits' => 'required',
            'website' => 'required',
        ];
    }
}
