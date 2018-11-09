<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;


class PostRequest extends FormRequest
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
            'Title'  => 'required|unique:Post,Title',
            'Description'    =>  'required',
            'requirement'    =>  'required',
            'Amount_of_people'    =>  'required',
            'Start_day'    =>  'required',
            'End_day'    =>  'required'

      
        ];
    }

    public function messages(){
        return [
            'Title.required'  =>  'Please enter Title  ',
            'Description.required'  =>  'Please enter descriptions ',
            'requirement.required'  =>  'Please enter requirement ',
            'Amount_of_people.required'  =>  'Please enter Amount of people ',
            'Start_day.required'  =>  'Please enter Start day ',
            'End_day.required'   => 'Plaese enter End day'
         


        ];
    }

}
