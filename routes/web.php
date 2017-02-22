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
    Route::resource('sml_admin/users', 'UserController');
    Route::get('sml_admin/users', ['as' => 'users.index', 'uses' => 'UserController@index', 'middleware' => ['permission:user-list|user-create|user-edit|user-delete']]);
    Route::get('sml_admin/roles', ['as' => 'roles.index', 'uses' => 'RoleController@index', 'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
    Route::post('sml_admin/roles/create', ['as' => 'roles.store', 'uses' => 'RoleController@store', 'middleware' => ['permission:role-create']]);
    Route::get('sml_admin/roles/create', ['as' => 'roles.create', 'uses' => 'RoleController@create', 'middleware' => ['permission:role-create']]);
    Route::get('sml_admin/roles/{id}/edit', ['as' => 'roles.edit', 'uses' => 'RoleController@edit', 'middleware' => ['permission:role-edit']]);
    Route::patch('sml_admin/roles/{id}', ['as' => 'roles.update', 'uses' => 'RoleController@update', 'middleware' => ['permission:role-edit']]);
    Route::delete('sml_admin/roles/{id}', ['as' => 'roles.destroy', 'uses' => 'RoleController@destroy', 'middleware' => ['permission:role-delete']]);
    Route::get('sml_admin/roles/{id}', ['as' => 'roles.show', 'uses' => 'RoleController@show']);

    Route::get('sml_admin/tintucs', ['as' => 'tintucs.index', 'uses' => 'TinTucController@index', 'middleware' => ['permission:tintuc-list|tintuc-create|tintuc-edit|tintuc-delete']]);
    Route::post('sml_admin/tintucs/create', ['as' => 'tintucs.store', 'uses' => 'TinTucController@store', 'middleware' => ['permission:tintuc-create']]);
    Route::get('sml_admin/tintucs/create', ['as' => 'tintucs.create', 'uses' => 'TinTucController@create', 'middleware' => ['permission:tintuc-create']]);
    Route::get('sml_admin/tintucs/{id}/edit', ['as' => 'tintucs.edit', 'uses' => 'TinTucController@edit', 'middleware' => ['permission:tintuc-edit']]);
    Route::patch('sml_admin/tintucs/{id}', ['as' => 'tintucs.update', 'uses' => 'TinTucController@update', 'middleware' => ['permission:tintuc-edit']]);
    Route::delete('sml_admin/tintucs/{id}', ['as' => 'tintucs.destroy', 'uses' => 'TinTucController@destroy', 'middleware' => ['permission:tintuc-delete']]);
    Route::get('sml_admin/tintucs/{id}', ['as' => 'tintucs.show', 'uses' => 'TinTucController@show']);

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