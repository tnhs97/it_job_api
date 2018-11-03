<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use App\products;

class ControllerProduct extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getProduct(){
        $products = products::all();
        return view('viewAdmin.shop_product',['products' => $products]);
    }

    public function getAddProduct(){
    	return view('viewAdmin.addProduct');
    }

    public function postAddProduct(SmallCateRequest $req){
    	$smallcate=new smallcategories;
    	$smallcate->nameSmallCate=$req->txt_SmallCateName;
    	$smallcate->descriptions=$req->txt_SmallCateDecription;
    	$smallcate->id_category=$req->txt_CateName;
    	$smallcate->save();
    	return redirect()->route('shop_product')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add small category']);
    }

    public function getDeleteProduct($id){
    	$smallcate=smallcategories::find($id);
    	$smallcate->delete($id);
    	return redirect()->route('shop_product')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete delete category']);
    }

    public function getEditProduct($id){
    	$data=smallcategories::find($id);
    	$parent=smallcategories::select('id','nameSmallCate','descriptions','id_category')->get()->toArray();
    	return view('viewAdmin.editProduct',compact('data','parent','id'));
    }

    public function postEditProduct(SmallCateRequest $req,$id){
    	$smallcate=smallcategories::find($id);
    	$smallcate->nameSmallCate=$req->txt_SmallCateName;
    	$smallcate->descriptions=$req->txt_SmallCateDecription;
    	$smallcate->id_category=$req->txt_CateName;
    	$smallcate->save();
    	return redirect()->route('shop_product')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete update Small category']);

    }
}
