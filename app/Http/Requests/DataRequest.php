<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataRequest extends FormRequest
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
            'user_id' => 'required',
          ];
    }

    public function messages() {
      return [
        'title.required' => 'Поле название является обязательным',
        'description.required' => 'Поле описание является обязательным',
        'user_id.required' => 'Поле user_id является обязательным',
      ];
    }


}
