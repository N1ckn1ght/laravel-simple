<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WallRequest extends FormRequest
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
            'wall-name' => 'required|max:32',
            'wall-msg' => 'required|max:1024'
        ];
    }

    public function attributes() {
        return [
            'wall-name' => 'name',
            'wall-msg' => 'message'
        ];
    }
}
