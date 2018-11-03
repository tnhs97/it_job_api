<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;


class CateRequest extends FormRequest
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
            'txt_CateName'  => 'required|unique:categories,name',
            'cateImage'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'txt_CateDecription'    =>  'required'
           // 'cateImage' =>  'requỉred'
           // 'txt_CateDecription'    =>  'requỉred|descriptions',
        ];
    }

    public function messages(){
        return [
            'txt_CateName.required'  =>  'Please enter name category ',
            'txt_CateName.unique'  =>  'This name category is exist',
            'cateImage.required'    =>  'Please choose image',
            'cateImage.image'   => 'This file is Not image',
            'txt_CateDecription.required'   => 'Plaese enter descriptions'
          // 'cateImage.requỉred'    =>  'Please choose image',
            //'txt_CateDecription.requỉred'    =>  'Please enter descriptions category',


        ];
    }

}
