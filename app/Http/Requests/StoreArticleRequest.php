<?php

namespace Melon\Http\Requests;

class StoreArticleRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|between:3,255',
            'content' => 'required',
        ];
    }
}
