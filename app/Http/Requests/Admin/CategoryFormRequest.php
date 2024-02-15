<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class CategoryFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
       $rules=[
            'name'=>[
                'required',
                'string',
                'max:200'
            ],
            'slog'=>[
                'required',
                'string',
                'max:200'
            ],
            'description'=>[
                'required',
                
            ],
            'image'=>[
                'required',
                'mimes:jpeg,jpg,png'
                
            ],
            'mata_title'=>[
                'required',
                'string',
                'max:200'
            ],
            'mata_description'=>[
                'required',
                'string'
            ],
            'mata_keyword'=>[
                'required',
                'string'
            ],
            'navbar_status'=>[
                'nullable',
                'boolean'
            ],
            'status'=>[
                'nullable',
                'boolean'
            ],
       ];
            //
            return $rules;
    }
}
