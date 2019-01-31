<?php

namespace App\Http\Request;


class StoreUpdateBookRequest extends Request
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
        $id = $this->segment(2);

        return [
            'name' => "required|min:3|max:10|unique:book,name,{$id},id",
            'author'  => 'required|min:3|max:20',
        ];
    }
}
