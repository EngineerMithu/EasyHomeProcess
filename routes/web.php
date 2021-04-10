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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/welcome', 'HomeController@index')->name('welcome');










///Start Admin//////
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']],function 
(){

    Route::get('dashboard','DashboardController@index')->name('dashboard');
});
Route::middleware(['auth','admin'])->group(function (){
    
    Route::get('/admin',function(){
        return view('admin.dashboard');
    });
});
///Account/////
Route::get('add/account/view', 'AccountController@addaccountview');
Route::post('add/account/insert', 'AccountController@addaccountinsert');
Route::get('delete/account/{account_id}', 'AccountController@deleteaccount');
Route::get('edit/account/{account_id}', 'AccountController@editaccount');
Route::post('edit/account/insert', 'AccountController@editaccountinsert');
///Test/////
Route::get('add/test/view', 'TestController@addtestview');
Route::post('add/test/insert', 'TestController@addtestinsert');
Route::get('delete/account/{account_id}', 'AccountController@deleteaccount');
Route::get('edit/account/{account_id}', 'AccountController@editaccount');
Route::post('edit/account/insert', 'AccountController@editaccountinsert');
//comment/////
///Proposal///
Route::get('add/proposal/view', 'ProposalController@addproposalview');
Route::post('add/proposal/insert', 'ProposalController@addproposalinsert');
Route::get('delete/proposal/{proposal_id}', 'ProposalController@deleteproposal');
Route::get('edit/proposal/{proposal_id}', 'ProposalController@editproposal');
Route::post('edit/proposal/insert', 'ProposalController@editproposalinsert');
/////End Admin//////


/////Start Manager//////
Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware'=>['auth','author']],function 
(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');

});
Route::middleware(['auth','author'])->group(function (){
    
    Route::get('/manager',function(){
        return view('author.dashboard');
    });
});
///Tenant/////
Route::get('add/tenant/view', 'TenantController@addtenantview');
Route::post('add/tenant/insert', 'TenantController@addtenantinsert');
Route::get('delete/tenant/{tenant_id}', 'TenantController@deletetenant');
Route::get('edit/tenant/{tenant_id}', 'TenantController@edittenant');
Route::post('edit/tenant/insert', 'TenantController@edittenantinsert');
///Flat/////
Route::get('add/flat/view', 'FlatsController@addflatview');
Route::get('add/flat/views', 'FlatsController@addflatviews');////Tenantview/////
Route::post('add/flat/insert', 'FlatsController@addflatinsert');
Route::get('add/flat/insert', 'FlatController@addflatview');
Route::get('delete/flat/{flat_id}', 'FlatsController@deleteflat');
Route::get('edit/flat/{flat_id}', 'FlatsController@editflat');
Route::post('edit/flat/insert', 'FlatsController@editflatinsert');
///Booking/////
Route::get('add/bookingreq/view', 'FlatsController@addbookingreqview');
Route::post('add/bookingreq/insert', 'BookingController@addbookingreqinsert');
///Bill/////
Route::get('add/bill/view', 'BillController@addbillview');
Route::post('add/bill/insert', 'BillController@addbillinsert');
Route::get('delete/bill/{bill_id}', 'BillController@deletebill');
Route::get('edit/bill/{bill_id}', 'BillController@editbill');
Route::post('edit/bill/insert', 'BillController@editbillinsert');
///Employee/////
Route::get('add/employee/view', 'EmployeeController@addemployeeview');
Route::get('add/employee/views', 'EmployeeController@addemployeeviews');/////user view/////
Route::post('add/employee/insert', 'EmployeeController@addemployeeinsert');
Route::get('delete/employee/{employee_id}', 'EmployeeController@deleteemployee');
Route::get('edit/employee/{employee_id}', 'EmployeeController@editemployee');
Route::post('edit/employee/insert', 'EmployeeController@editemployeeinsert');
/////End Manager//////



/////Start Tenant//////
Route::group(['as'=>'tenant.','prefix'=>'tenant','namespace'=>'Tenant','middleware'=>['auth','tenant']],function 
(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');

});
Route::middleware(['auth','tenant'])->group(function (){
    
    Route::get('/tenant',function(){
        return view('tenant.dashboard');
    });
});
//////Tenant Problem////////
Route::get('add/problem/view', 'ProblemController@addproblemview');
Route::get('add/problem/{problem_id}','ProblemController@addproblemview');
Route::post('add/problem/insert', 'ProblemController@addprobleminsert');
Route::get('delete/problem/{problem_id}', 'ProblemController@deleteproblem');
Route::get('edit/problem/{problem_id}', 'ProblemController@editproblem');
Route::post('edit/problem/insert', 'ProblemController@editprobleminsert');
/////End Tenant//////


///////Start Security////////
Route::group(['as'=>'security.','prefix'=>'security','namespace'=>'Security','middleware'=>['auth','security']],function 
(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});
Route::middleware(['auth','security'])->group(function (){
    
    Route::get('/security',function(){
        return view('security.dashboard');
    });
});
///////End Security////////

///////Start Machanic////////
Route::group(['as'=>'machanic.','prefix'=>'machanic','namespace'=>'Machanic','middleware'=>['auth','machanic']],function 
(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');

});
Route::middleware(['auth','machanic'])->group(function (){
    
    Route::get('/machanic',function(){
        return view('machanic.dashboard');
    });
});
////////End Machanic////////

///Start Driver//////
Route::group(['as'=>'driver.','prefix'=>'driver','namespace'=>'Driver','middleware'=>['auth','driver']],function 
(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');

});
Route::middleware(['auth','driver'])->group(function (){
    
    Route::get('/driver',function(){
        return view('driver.dashboard');
    });
});
////////End Driver////////


















//////Star Flat Api//////
$router->get('/api/flats','FlatsController@allflatApi');

$router->post('/api/add_flat',function () use ($router){
return "I am Post";
});


$router->put('/put',function () use ($router){
return "I am Put";
});


$router->delete('/delete',function () use ($router){
return "I am Delete";
});    

$router->post('/mithu',function () {
    return "I am Mithu";
    });  