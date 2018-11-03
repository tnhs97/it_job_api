<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slides;
use App\categories;
use App\products;
use App\images;
use App\smallCategories;
use App\Cart_Old;
use App\users;
use App\orders;
use App\order_details;
use Session;

class controllerPage extends Controller
{
    public function getIndex(){
        $slide=slides::all();
        $category = categories::all();
        $new_product= products::where('new',1)->get();
        return view('page.index',['slides'=>$slide,'categories'=>$category,'products'=>$new_product]);
    }

    public function getCollectionWomen($type){
    	$sp_cate = products::where('id_small_categories',$type)->get();
        $sp_small =smallCategories::all();
        $sp_smallName =smallCategories::where('id',$type)->first();
        return view('page.collection_women',compact('sp_cate','sp_small','sp_smallName'));
    }

    public function getListingMenu(){
        $category = categories::all();
        return view('page.listingMenu',['categories'=>$category]);
    }

    public function getProductTitle(Request $req){
        $sanpham=products::where('id',$req->id)->first();
        $same=products::where('id_small_categories',$sanpham->id_small_categories)->get();
        $image_products=images::where('id_product',$sanpham->id)->get();
        //$image_product=products::where('id',images::where('id_product'))->get();
    	return view('page.productTitle',compact('sanpham','image_products'),['products'=>$same]);
    }
/*
    public function getListing(){
        $category = categories::all();
        return view('page.listing',['categories'=>$category]);
    }
    */
   public function getCart(){
        return view('page.cart');
   }

   public function getAddCart(Request $req,$id){
        $product = products::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart_Old($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
   }

    public function getAddCartTitle(Request $req,$id){
            $product = products::find($id);
            $oldCart = Session('cart')?Session::get('cart'):null;
            $cart = new Cart_Old($oldCart);
            $cart->add($product, $id,$req->qty);
            $req->session()->put('cart',$cart);
            return redirect()->back();
    }

   public function getDeleteCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart_Old($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function getUpdateCart(Request $req){
            $cart = Session::has('cart')?Session::get('cart'):null;
            $co=1;
            foreach ($req->all() as $id => $val) {
                if($co!=1){
                    $cart[$id]['qty']=$val;
                }
                $co++;
            }
            if(count($cart->items)>0){
                Session::put('cart',$cart);
            }
            else{
                Session::forget('cart');
            }
            return redirect()->back();
    }


    public function getCustomerInformation()
    {
        return view('page.customerInformation');
    }

    public function getShippingMethod()
    {
        return view('page.shippingMethod');
    }
    public function getPaymentMethod()
    {
        return view('page.paymentMethod');
    }

    public function getOrder(){
        return view('page.customerInformation');
    }

    public function postOrder(Request $req){
        $cart = Session::get('cart');

        $user = new users;
        $user->username=$req->fullName;
        $user->password='123';
        $user->email=$req->email;
        $user->gender=$req->gender;
        $user->phone=$req->phone;
        $user->address=$req->address;
        $user->id_type=1;
        $user->save();

        $order = new orders;
        $order->id_user = $user->id;
        $order->date_order = date("Y-m-d H:i:s");
        $order->totalPrice = $cart->totalPrice;
        $order->payment = $req->payment;
        $order->paid = 0;
        $order->status = 'chua';
        $order->save();

        foreach ($cart->items as $key => $value) {
            $order_detail = new order_details;
            $order_detail->id_order = $order->id;
            $order_detail->id_product = $key;
            $order_detail->quanitily = $value['qty'];
            $order_detail->price = ($value['price']/$value['qty']);
            $order_detail->save();
        }
        Session::forget('cart');
        return redirect()->back()->with('thongbao','Đặt hàng thành công');

    }
}
