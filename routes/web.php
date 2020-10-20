<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
    
// });
Route::get('/', [App\Http\Controllers\Frontcontroller::class, 'home'])->name('/');
Route::get('/config_clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
});

Route::get('/view_clear', function() {
    Artisan::call('view:clear');
});


Auth::routes();


// App\Http\Controllers\Auth\LoginController@showLoginFor
// Authentication Routes...
// Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::get('login/{role?}/{redirect?}', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
// $this->post('login', 'Auth\LoginController@login');
// $this->post('logout', 'Auth\LoginController@logout')->name('logout');

// // Registration Routes...
// $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// $this->post('register', 'Auth\RegisterController@register');

// // Password Reset Routes...
// $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
// $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
// $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
// $this->post('password/reset', 'Auth\ResetPasswordController@reset');





// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/player', 'PlayerController@index')->name('player')->middleware('player');
// Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
// Route::get('/admin', 'AdminController@index');
Route::get('/player', [App\Http\Controllers\PlayerController::class, 'index'])->name('player')->middleware('player');

Route::get('/client', [App\Http\Controllers\ClientController::class, 'index'])->name('client')->middleware('client');
Route::get('/agent', [App\Http\Controllers\AgentController::class, 'index'])->name('agent')->middleware('agent');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('admin');

Route::get('/agent_register', [App\Http\Controllers\HomeController::class, 'agent_register'])->name('agent_register');
Route::POST('/agent_register_save', [App\Http\Controllers\HomeController::class, 'agent_register_save'])->name('agent_register_save');

Route::get('/customer_register/{agent_id?}', [App\Http\Controllers\HomeController::class, 'customer_register'])->name('customer_register');
Route::POST('/customer_register_save', [App\Http\Controllers\HomeController::class, 'customer_register_save'])->name('customer_register_save');

Route::middleware('adminAuth')->group(function () {
    Route::get('/admin/customer', [App\Http\Controllers\AdminController::class, 'customer'])->name('admin_customer');
    Route::get('admin/customer_data', [App\Http\Controllers\AdminController::class, 'customer_data'])->name('admincustomer_data');

    Route::get('/admin/agent/view/{agent_id}', [App\Http\Controllers\AdminController::class, 'agentview'])->name('agentview');

    Route::get('/admin/agent', [App\Http\Controllers\AdminController::class, 'agent']);
    Route::get('agent_data', [App\Http\Controllers\AdminController::class, 'agent_data'])->name('agent_data');
    Route::get('/admin/agent/sales/{agent_id}', [App\Http\Controllers\AdminController::class, 'agent_sales'])->name('agent_sales');

    Route::get('/admin/deposite', [App\Http\Controllers\AdminController::class, 'deposite'])->name('deposite');
    Route::get('/admin/withdraw', [App\Http\Controllers\AdminController::class, 'withdraw'])->name('withdraw');

    Route::get('/admin/product', [App\Http\Controllers\ProductController::class, 'product'])->name('product');
    Route::get('product_data', [App\Http\Controllers\ProductController::class, 'product_data'])->name('product_data');
    Route::get('/admin/product/add', [App\Http\Controllers\ProductController::class, 'add'])->name('add_product');
    Route::post('/admin/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('store_product');
    Route::get('/admin/product/edit/{product_id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('edit_product');
    Route::post('/admin/product/update/{product_id}', [App\Http\Controllers\ProductController::class, 'update'])->name('update_product');
    Route::get('/admin/product/delete/{product_id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('delete_product');

    Route::get('/admin/settings', [App\Http\Controllers\SettingsController::class, 'adminsettings'])->name('settings');
    Route::post('/admin/settings', [App\Http\Controllers\SettingsController::class, 'updatedata'])->name('settings');

    Route::get('/Gallery/Videos', [App\Http\Controllers\AdminController::class, 'GalleryVideos'])->name('Gallery/Videos');
Route::get('/Gallery/Trading_screenshots', [App\Http\Controllers\AdminController::class, 'Trading_screenshots'])->name('Gallery/Trading_screenshots');
Route::get('/Gallery/Videos/addVideos', [App\Http\Controllers\AdminController::class, 'addVideos'])->name('Gallery/Videos/addVideos');
Route::post('/addVideos', [App\Http\Controllers\AdminController::class, 'addVideossubmit'])->name('addVideos');
Route::get('/video_data', [App\Http\Controllers\AdminController::class, 'video_data'])->name('video_data');
Route::get('/Gallery/Videos/delete/{id}', [App\Http\Controllers\AdminController::class, 'video_delete'])->name('video_delete');

Route::get('/screenshot_data', [App\Http\Controllers\AdminController::class, 'screenshot_data'])->name('screenshot_data');
Route::get('/Gallery/screenshots/addscreenshots', [App\Http\Controllers\AdminController::class, 'addscreenshots'])->name('Gallery/screenshots/addscreenshots');
Route::post('/addScreenshots', [App\Http\Controllers\AdminController::class, 'addScreenshotssubmit'])->name('addScreenshots');
Route::get('/Gallery/Screenshot/delete/{id}', [App\Http\Controllers\AdminController::class, 'Screenshot_delete'])->name('Screenshot_delete');

Route::get('/admin/package', [App\Http\Controllers\AdminController::class, 'admin_packag_list'])->name('admin_packag_list');
Route::get('admin_packag_data', [App\Http\Controllers\AdminController::class, 'admin_packag_data'])->name('admin_packag_data');
Route::get('admin/packag/view/{id}', [App\Http\Controllers\AdminController::class, 'admin_packag_view'])->name('admin_packag_view');



});

Route::middleware('ClientAuth')->group(function () {
    //customer
    Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer');
    Route::get('/profile', [App\Http\Controllers\CustomerController::class, 'profile'])->name('profile');

    Route::post('/Submitprofile', [App\Http\Controllers\CustomerController::class, 'Submitprofile'])->name('Submitprofile');

    Route::get('/PDF/{id}', [App\Http\Controllers\CustomerController::class, 'idcardPDF']);

    Route::get('/deposit', [App\Http\Controllers\Depositcontroller::class, 'index']);
    Route::get('/card', [App\Http\Controllers\Depositcontroller::class, 'carddetails']);
    Route::post('/card', [App\Http\Controllers\Depositcontroller::class, 'cardinsert']);
    Route::get('/transaction', [App\Http\Controllers\Depositcontroller::class, 'transaction'])->name('transaction');
    Route::get('/gettaranjeson', [App\Http\Controllers\Depositcontroller::class, 'gettaranjeson'])->name('gettaranjeson');
    Route::get('/taranjeson/view/{id}', [App\Http\Controllers\Depositcontroller::class, 'taranjeson_viwe']);
    Route::get('/Invoice/{id}', [App\Http\Controllers\Depositcontroller::class, 'Invoice'])->name('Invoice');
    Route::get('/Invoicepdf/{id}', [App\Http\Controllers\Depositcontroller::class, 'Invoicepdf'])->name('Invoicepdf');
    Route::get('/product_details/{id}', [App\Http\Controllers\Frontcontroller::class, 'product_details'])->name('/product_details{id}');
    Route::get('/checkout/', [App\Http\Controllers\Frontcontroller::class, 'order_user'])->name('/checkout');
    Route::post('/checkout', [App\Http\Controllers\Frontcontroller::class, 'order_usersubmit'])->name('/checkout');
    Route::post('/addcart/{id}', [App\Http\Controllers\CartsController::class, 'addcart'])->name('/addcart/{id}');
    Route::get('/getcart', [App\Http\Controllers\CartsController::class, 'getcart'])->name('getcart');
    Route::get('/clear_cart/{id}', [App\Http\Controllers\CartsController::class, 'clear_cart'])->name('clear_cart');
    Route::get('/pluscart/{id}', [App\Http\Controllers\CartsController::class, 'pluscart'])->name('pluscart/{id}');
    Route::get('/minuscart/{id}', [App\Http\Controllers\CartsController::class, 'minuscart'])->name('minuscart');
    Route::get('/load_cart_block', [App\Http\Controllers\CartsController::class, 'load_cart_block'])->name('load_cart_block');
    Route::get('/remove_cart', [App\Http\Controllers\CartsController::class, 'remove_cart'])->name('remove_cart');
    Route::get('/customers/packag', [App\Http\Controllers\CustomerController::class, 'customer_packag_list'])->name('customer/packag');
    Route::get('/customer_packag_data', [App\Http\Controllers\CustomerController::class, 'customer_packag_data'])->name('customer_packag_data');
    Route::get('/customer/packag/view/{PackageUser_id}', [App\Http\Controllers\CustomerController::class, 'customer_packag_view'])->name('/customer/packag/view/{PackageUser_id}');
    Route::get('/payment_successful', [App\Http\Controllers\PaymentController::class, 'payment_successful'])->name('paypal.success');
});

Route::middleware('AgentAuth')->group(function () {
//Agent

Route::get('/agent/profile', [App\Http\Controllers\AgentController::class, 'profile'])->name('profile');
Route::post('/agentprofile', [App\Http\Controllers\AgentController::class, 'Submitprofile'])->name('agentprofile');
Route::get('/agentprofilepdf/{id}', [App\Http\Controllers\AgentController::class, 'agentprofilepdf'])->name('agentprofilepdf');

Route::get('/addcustomer', [App\Http\Controllers\AgentController::class, 'addcustomer'])->name('addcustomer');
Route::post('/addcustomer', [App\Http\Controllers\AgentController::class, 'submitcustomer'])->name('addcustomer');
Route::get('/customerlist', [App\Http\Controllers\AgentController::class, 'customerlist'])->name('customerlist');

Route::get('customer_data', [App\Http\Controllers\AgentController::class, 'customer_data'])->name('customer_data');
Route::get('/agent/customer/edit/{id}', [App\Http\Controllers\AgentController::class, 'customeredit'])->name('customeredit');
Route::get('/agent/customer/delete/{id}', [App\Http\Controllers\AgentController::class, 'customerdelete'])->name('customerdelete');
Route::post('/customerupdate', [App\Http\Controllers\AgentController::class, 'customerupdate'])->name('customerupdate');

Route::get('/taranjesonlist', [App\Http\Controllers\AgentController::class, 'taranjesonlist'])->name('taranjesonlist');
Route::get('taranjeson_data', [App\Http\Controllers\AgentController::class, 'taranjeson_data'])->name('taranjeson_data');
Route::get('/agent/taranjeson/view/{id}', [App\Http\Controllers\AgentController::class, 'agenttaranjesonview'])->name('agenttaranjesonview');
Route::get('/withdraw', [App\Http\Controllers\AgentController::class, 'withdraw'])->name('withdraw');
Route::post('/withdraw', [App\Http\Controllers\AgentController::class, 'addwithdraw'])->name('addwithdraw');
Route::get('/renewmembership', [App\Http\Controllers\AgentController::class, 'renewmembership'])->name('renewmembership');

Route::post('/membershiprenew', [App\Http\Controllers\AgentController::class, 'membershiprenew'])->name('membershiprenew');

Route::get('/package', [App\Http\Controllers\AgentController::class, 'customer_packag_list'])->name('customer_packag_list');
Route::get('/agent_packag_data', [App\Http\Controllers\AgentController::class, 'customer_packag_data'])->name('agent_packag_data');
Route::get('/agent/packag/view/{id}', [App\Http\Controllers\AgentController::class, 'customer_packag_view'])->name('/agent/packag/view/');

});
Route::view('/About_us', 'front.About_us')->name('About_us');
Route::view('/Product', 'front.Product')->name('Product');

Route::get('/contact_us', [App\Http\Controllers\Frontcontroller::class, 'contact'])->name('contact_us');
Route::post('/contact_us', [App\Http\Controllers\Frontcontroller::class, 'contact_us']);

Route::get('/gallery', [App\Http\Controllers\Frontcontroller::class, 'screenshots'])->name('/gallery');

Route::get('/Charity', [App\Http\Controllers\CharityController::class, 'index'])->name('Charity');
Route::post('/Charity', [App\Http\Controllers\CharityController::class, 'Charity'])->name('Charity');

Route::get('/paypal', [App\Http\Controllers\PaypalController::class, 'index']);
// Route::get('/paypal/success', [App\Http\Controllers\PaypalController::class, 'success'])->name('paypal.success');
Route::get('/paypal/cancel', [App\Http\Controllers\PaymentController::class, 'payment_cancel'])->name('paypal.cancel');






// Route::get('/superadmin', 'SuperAdminController@index')->name('superadmin')->middleware('superadmin');
// Route::get('/scout', 'ScoutController@index')->name('scout')->middleware('scout');
// Route::get('/team', 'TeamController@index')->name('team')->middleware('team');
// Route::get('/academy', 'AcademicController@index')->name('academy')->middleware('academy');
Route::get('/fuser', [App\Http\Controllers\FackController::class, 'fuser']);
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

// Route::get('/home', 'AcademicController@index')->name('home');
