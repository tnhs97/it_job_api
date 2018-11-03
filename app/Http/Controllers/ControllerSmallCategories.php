<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use App\smallCategories;
use App\Http\Requests\SmallCateRequest;

class ControllerSmallCategories extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getSmallCategories(){
        $smallcategories = smallcategories::all();
        return view('viewAdmin.shop_small_category',['smallcategories' => $smallcategories]);
    }

    public function getAddSmallCategories(){
    	return view('viewAdmin.addSmallCategory');
    }

    public function postAddSmallCategories(SmallCateRequest $req){
    	$smallcate=new smallcategories;
    	$smallcate->nameSmallCate=$req->txt_SmallCateName;
    	$smallcate->descriptions=$req->txt_SmallCateDecription;
    	$smallcate->id_category=$req->txt_CateName;
    	$smallcate->save();
    	return redirect()->route('shop_small_category')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add small category']);
    }

    public function getDeleteSmallCategory($id){
    	$smallcate=smallcategories::find($id);
    	$smallcate->delete($id);
    	return redirect()->route('shop_small_category')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete delete category']);
    }

    public function getEditSmallCategory($id){
    	$data=smallcategories::find($id);
    	$parent=smallcategories::select('id','nameSmallCate','descriptions','id_category')->get()->toArray();
    	return view('viewAdmin.editSmallCategory',compact('data','parent','id'));
    }

    public function postEditSmallCategory(SmallCateRequest $req,$id){
    	$smallcate=smallcategories::find($id);
    	$smallcate->nameSmallCate=$req->txt_SmallCateName;
    	$smallcate->descriptions=$req->txt_SmallCateDecription;
    	$smallcate->id_category=$req->txt_CateName;
    	$smallcate->save();
    	return redirect()->route('shop_small_category')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete update Small category']);

    }
}
