<?php

namespace App\Http\Requests\Dashboard\Delegate;

class StoreContribution extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string'],
            'body'  => ['required', 'string'],
        ];
    }
}
