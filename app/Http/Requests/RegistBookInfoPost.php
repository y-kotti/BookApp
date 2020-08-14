<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistBookInfoPost extends FormRequest
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
            'title' => ['required'],
            'cost' => ['required', 'integer'],
            'memo' => ['required', 'max:'. config('const.Books.MEMO_MAX_LENGTH')],
        ];
    }
}
