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
    return view('frontend.trangchu.index');
});

Route::get('/google-adwords', function () {
    return view('frontend.dvgoogleadwords.googleadwords');
});

Route::get('/thiet-ke-website', function () {
    return view('frontend.dvthietkeweb.thietkewebsite');
});
Route::get('/sml_login', function () {
    return view('backend.login.login');
});
Route::get('/sml_login', function () {
    if (\Illuminate\Support\Facades\Auth::check())
        return redirect()->intended('sml_admin/dashboard');
    else
        return view('backend.login.login');
});
Route::post('sml_login', 'AuthController@login')->name('login');
Route::get('sml_logout', 'AuthController@logout')->name('logout');
Route::group(['middleware' => ['auth']], function () {
    Route::resource('sml_admin/users','UserController');
    Route::resource('sml_admin/roles','RoleController');
    Route::get('sml_admin/users',['as'=>'users.index','uses'=>'UserController@index','middleware'=>['permission:user-list|user-create|user-edit|user-delete']]);
    Route::get('sml_admin/roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
    Route::get('sml_admin/roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
    Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
    Route::get('sml_admin/dashboard', function () {
        return view('backend.admin.dashboard');
    })->name('dashboard');
    Route::get('sml_admin', function () {
        return redirect('sml_admin/dashboard');
    });
//    Route::get('sml_admin/users', function () {
//        return view('backend.admin.user');
//    });
});