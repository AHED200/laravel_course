<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        //Validate store request data
        return [
            'title' => 'required|max:10',
            'body' => 'required'
        ];
    }


    public function messages()
    {
        return [
            'title.required' => 'The post title is required',
            'title.max' => 'The post title limited 10 characters',
            'body.required' => 'The post description is required',
        ];
    }
}
