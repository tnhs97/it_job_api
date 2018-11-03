<?php

use Illuminate\Http\Request;
use App\Http\Resources\Product as ProductResource;
use App\Product;
use App\Post;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/products/{id}', 'ProductController@show');


/*Route::get('/products', function()
{
	$products = Product::find(2);
	return new ProductResource($products);
});
*/


Route::get('/', function () {
	return view('welcome');
});

Route::get('index',[
	'as'=>'index',
	'uses'=>'controllerPage@getIndex'
]);

Route::get('collection_women/{type}',[
	'as'=>'collection_women',
	'uses'=>'controllerPage@getCollectionWomen'
]);

Route::get('listingMenu',[
	'as'=>'listingMenu',
	'uses'=>'controllerPage@getListingMenu'
]);

Route::get('customerInformation',[
	'as'=>'getCustomerInformation',
	'uses'=>'controllerPage@getCustomerInformation'
]);

Route::get('shippingMethod',[
	'as'=>'getShippingMethod',
	'uses'=>'controllerPage@getShippingMethod'
]);

Route::get('paymentMethod',[
	'as'=>'getPaymentMethod',
	'uses'=>'controllerPage@getPaymentMethod'
]);

/*
Route::get('listing',[
	'as'=>'listing',
	'uses'=>'controllerPage@getListing'
]);
*/

Route::get('productTitle/{id}',[
	'as'=>'productTitle',
	'uses'=>'controllerPage@getProductTitle'
]);

Route::get('cart',[
	'as'=>'cart',
	'uses'=>'controllerPage@getCart'
]);

Route::get('add-to-cart/{id}',[
	'as'=>'addCart',
	'uses'=>'controllerPage@getAddCart'
]);

Route::post('get-add-to-cart/{id}',[
	'as'=>'AddCartTitle',
	'uses'=>'controllerPage@getAddCartTitle'
]);

Route::get('del-cart/{id}',[
	'as'=>'deleteCart',
	'uses'=>'controllerPage@getDeleteCart'
]);

Route::get('update-cart',[
	'as'=>'updateCart',
	'uses'=>'controllerPage@getUpdateCart'
]);

Route::get('order',[
	'as'=>'orders',
	'uses'=>'controllerPage@getOrder'
]);

Route::post('order',[
	'as'=>'orders',
	'uses'=>'controllerPage@postOrder'
]);

//
//
//
//

// Admin

//
//
//

Route::get('indexAdmin',[
	'as'=>'indexAdmin',
	'uses'=>'PageAdminController@getIndexAdmin'
]);


// start small categories
// 
// 
// 
Route::get('shop_small_category',[
	'as'=>'shop_small_category',
	'uses'=>'ControllerSmallCategories@getSmallCategories'
]);
Route::get('addSmallCategory',[
	'as'=>'getaddSmallCategory',
	'uses'=>'ControllerSmallCategories@getaddSmallCategories'
]);
Route::post('addSmallCategory',[
	'as'=>'postaddSmallCategory',
	'uses'=>'ControllerSmallCategories@postAddSmallCategories'
]);

Route::get('editSmallCategory/{id}',[
	'as'=>'geteditSmallCategory',
	'uses'=>'ControllerSmallCategories@getEditSmallCategory'
]);
Route::post('editSmallCategory/{id}',[
	'as'=>'posteditSmallCategory',
	'uses'=>'ControllerSmallCategories@postEditSmallCategory'
]);
Route::get('deleteSmallCategory/{id}',[
	'as'=>'getdeleteSmallCategory',
	'uses'=>'ControllerSmallCategories@getDeleteSmallCategory'
]);

// end small categories
// 
// 
// 

// Categories
Route::get('shop_category',[
	'as'=>'shop_category',
	'uses'=>'ControllerCategories@getCategories'
]);

Route::get('addCategories',[
	'as'=>'getaddCategories',
	'uses'=>'ControllerCategories@getAddCategories'
]);

Route::post('addCategories',[
	'as'=>'postaddCategories',
	'uses'=>'ControllerCategories@postAddCategories'
]);

Route::get('editCategory/{id}',[
	'as'=>'geteditCategory',
	'uses'=>'ControllerCategories@getEditCategory'
]);

Route::post('editCategory/{id}',[
	'as'=>'posteditCategory',
	'uses'=>'ControllerCategories@postEditCategory'
]);

Route::get('deleteCategory/{id}',[
	'as'=>'getdeleteCategory',
	'uses'=>'ControllerCategories@getDeleteCategory'
]);

// end categories

// Product
Route::get('shop_product',[
	'as'=>'shop_product',
	'uses'=>'ControllerProduct@getProduct'
]);

Route::get('addProduct',[
	'as'=>'getaddProduct',
	'uses'=>'ControllerProduct@getAddProduct'
]);

Route::post('addProduct',[
	'as'=>'postaddProduct',
	'uses'=>'ControllerProduct@postAddProduct'
]);

Route::get('editProduct/{id}',[
	'as'=>'geteditProduct',
	'uses'=>'ControllerProduct@getEditProduct'
]);

Route::post('editProduct/{id}',[
	'as'=>'posteditProduct',
	'uses'=>'ControllerProduct@postEditProduct'
]);

Route::get('deleteProduct/{id}',[
	'as'=>'getdeleteProduct',
	'uses'=>'ControllerProduct@getDeleteProduct'
]);

// end product

Route::get('imageProduct',[
	'as'=>'imageProduct',
	'uses'=>'PageAdminController@getImageProduct'
]);

Route::get('addImageProduct',[
	'as'=>'addImageProduct',
	'uses'=>'PageAdminController@getAddImageProduct'
]);



Route::get('products',[
	'as'=>'products',
	'uses'=>'PageAdminController@getproduct'
]);

Route::get('addProduct',[
	'as'=>'addProduct',
	'uses'=>'PageAdminController@getAddProduct'
]);

Route::get('editProducts',[
	'as'=>'editProducts',
	'uses'=>'PageAdminController@getEditProduct'
]);


Route::get('demo',[
	'as'=>'demo',
	'uses'=>'ControllerCategories@getdemo'
]);



// end Admin



// new Admin 
// 
// 
// 

Route::get('dashboard',[
	'as'=>'dashboard',
	'uses'=>'PageAdminController@getDashboard'
]);

Route::get('banner',[
	'as'=>'banner',
	'uses'=>'PageAdminController@getBanner'
]);

Route::get('language',[
	'as'=>'language',
	'uses'=>'PageAdminController@getLanguager'
]);

Route::get('shop_brand',[
	'as'=>'shop_brand',
	'uses'=>'PageAdminController@getShop_brand'
]);





Route::get('shop_customer',[
	'as'=>'shop_customer',
	'uses'=>'PageAdminController@getShop_customery'
]);


Route::get('shop_product',[
	'as'=>'shop_product',
	'uses'=>'PageAdminController@getShop_productr'
]);

Route::get('shop_shipping',[
	'as'=>'shop_shipping',
	'uses'=>'PageAdminController@getShop_shipping'
]);

Route::get('shop_shipping_status',[
	'as'=>'shop_shipping_status',
	'uses'=>'PageAdminController@getShop_shipping_status'
]);


Route::get('login', function () {
	return view('viewAdmin.login');
});

Route::get('login',[
	'as'=>'login',
	'uses'=>'PageAdminController@getLogin'
]);

Route::get('setting', function () {
	return view('viewAdmin.setting');
});

Route::get('setting',[
	'as'=>'setting',
	'uses'=>'PageAdminController@getSetting'
]);
// end newAdmin



Route::get('admin_post', 'PostController@index');
Route::get('admin_post/{post}', 'PostController@show');
Route::post('admin_post', 'PostController@store');
Route::put('admin_post/{post}', 'PostController@update');
Route::delete('admin_post/{post}', 'PostController@delete');