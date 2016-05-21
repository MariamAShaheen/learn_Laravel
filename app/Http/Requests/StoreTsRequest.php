<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreTsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //admin use it 
        //true : any one can make request
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
            'name' => 'required|alpha|min:2', 
            'category' => 'required',
            'date'  =>'required'
         ];
    }
}
