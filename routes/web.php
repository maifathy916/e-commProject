<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/productss',function (){
    return view('products.products');
});

Route::get('/create',function (){
    return view('categories.createcat');
});


Route::get('/index2', 'ProductsController@index2');
 
Route::get('cart', 'ProductsController@cart');
 
Route::get('add-to-cart/{id}', 'ProductsController@addToCart');


Route::patch('update-cart', 'ProductsController@update2');
 
Route::delete('remove-from-cart', 'ProductsController@remove2');



Route::get('/prod',function (){
    return view('categories.catproduct');
});
Route::get('/bin/{id}','CategoriesController@show');
Route::get('/restore/{id}','CategoriesController@restorebin');
Route::get('/edit/{id}','CategoriesController@edit');
Route::get('/update/{id}','CategoriesController@update');
Route::get('/cats/{id}','CategoriesController@show');
Route::get('/deletecat/{id}','CategoriesController@destroy');
Route::any('/storecat','CategoriesController@store');



 Route::get('/', "TestController@Welcom")->name('home');
Route::get('/admin_page', "TestController@Admin")->name('admin_page');

Route::get('/category',"TestController@Category")->name('category');

Route::get('/electrics_product',"TestController@Electric")->name('electrics_product');

Route::get('/ADlogin',"TestController@Adminlogin")->name('ADlogin');

Route::get('/phones_product',"TestController@Phone")->name('phones_product');

Route::get('/products',"TestController@Product")->name('products');

Route::get('/user_page',"TestController@User")->name('user_page');

Route::get('/user_buy_product',"TestController@UserProuct")->name('user_buy_product');
//Route::get('/',['uses'=>'ProductController@getindex','as'=>'Product.index']);


//Route::get('/AddToCart/{id}',['uses'=>'ProductController@addtocart','as'=>'Product.add']);

/*Route::get('/product/addToCart/{id}','userController@addToCart');
Route::get('/history','userController@history');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home2', 'CategoriesController@index')->name('home2');


//Route::get('/','CitiesController@index');
Route::resource('products','ProductsController');
Route::resource('categories','CategoriesController');




//Route::get('/waleed','CitiesController@waled');
//Route::get('/admin','CitiesController@admin');
//Route::get('/bin','StudentsController@showbin');
//Route::get('/restore/{id}','StudentsController@restorebin');

//Route::get('/editstudent/{id}','StudentsController@edit');
//Route::post('/update/{id}','StudentsController@update');
//Route::get('/student/{id}','StudentsController@show');
//Route::get('/deletestudent/{id}','StudentsController@destroy');
//Route::post('/storestudent','StudentsController@store');
//Auth::routes();
//Route::get('/ss','AboController@ss');
//Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('/index','BlogController');
//Route::get('/students','StudentsController@index');

    //Route::get('/students','StudentsController@index');
    //Route::get('/admin','CitiesController@admin');

