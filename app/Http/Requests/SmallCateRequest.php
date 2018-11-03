<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;


class SmallCateRequest extends FormRequest
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
            'txt_SmallCateName'  => 'required|unique:smallcategories,nameSmallCate',
            'txt_SmallCateDecription'    =>  'required'
           // 'cateImage' =>  'requỉred'
           // 'txt_CateDecription'    =>  'requỉred|descriptions',
        ];
    }

    public function messages(){
        return [
            'txt_CateName.required'  =>  'Please enter name category ',
            'txt_CateName.unique'  =>  'This name category is exist',
            'txt_SmallCateName.required'  =>  'Please enter name Small category ',
            'txt_SmallCateName.unique'  =>  'This name Smallcategory is exist',
            'txt_SmallCateDecription.required'   => 'Plaese enter descriptions'
          // 'cateImage.requỉred'    =>  'Please choose image',
            //'txt_CateDecription.requỉred'    =>  'Please enter descriptions category',


        ];
    }
}
