<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForumStoreRequest extends FormRequest
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
            'forum' => 'required',
            'observations' => 'nullable',
            'course' => 'required',
            'start' => 'required|date|after_or_equal:today',
            'end' => 'required|after:start'
        ];
    }
}
