<?php
// 前台
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@showIndex'));
Route::controller('account','AccountController');

// 工单
Route::controller('ticket','TicketController');

// 后台登陆
Route::get('admin/login', 'Controllers\Admin\AccountController@getLogin');
Route::post('admin/login', 'Controllers\Admin\AccountController@postLogin');
Route::get('admin/logout', 'Controllers\Admin\AccountController@getLogout');

Route::group(array('prefix' => 'admin'), function()
{
    // 首页
    Route::get('/', array('as' => 'admin', 'uses' => 'Controllers\Admin\DashboardController@getIndex'));

    // 个人资料
    Route::get('account', 'Controllers\Admin\AccountController@getIndex');
    Route::post('account', 'Controllers\Admin\AccountController@postIndex');

    // 工单管理
    Route::get('ticket', array('as' => 'ticket', 'uses' => 'Controllers\Admin\TicketController@getIndex'));

    // 问题类型
    Route::get('type', array('as' => 'type', 'uses' => 'Controllers\Admin\TypeController@getIndex'));
    Route::get('type/create', array('as' => 'type/add', 'uses' => 'Controllers\Admin\TypeController@getCreate'));
    Route::post('type/create', 'Controllers\Admin\TypeController@postCreate');
    Route::get('type/{typeId}/edit', array('as' => 'update/type', 'uses' => 'Controllers\Admin\TypeController@getEdit'));
    Route::post('type/{typeId}/edit', 'Controllers\Admin\TypeController@postEdit');
    Route::get('type/{typeId}/delete', array('as' => 'delete/type', 'uses' => 'Controllers\Admin\TypeController@getDelete'));

    // 客户管理
    Route::get('member', array('as' => 'member', 'uses' => 'Controllers\Admin\MemberController@getIndex'));
    Route::get('member/create', array('as' => 'member/add', 'uses' => 'Controllers\Admin\MemberController@getCreate'));
    Route::post('member/create', 'Controllers\Admin\MemberController@postCreate');
    Route::get('member/{memberId}/edit', array('as' => 'update/member', 'uses' => 'Controllers\Admin\MemberController@getEdit'));
    Route::post('member/{operatorId}/edit', 'Controllers\Admin\MemberController@postEdit');
    Route::get('member/{operatorId}/delete', array('as' => 'delete/member', 'uses' => 'Controllers\Admin\MemberController@getDelete'));

    // 用户管理
    Route::get('operator', array('as' => 'operator', 'uses' => 'Controllers\Admin\OperatorController@getIndex'));
    Route::get('operator/create', array('as' => 'operator/add', 'uses' => 'Controllers\Admin\OperatorController@getCreate'));
    Route::post('operator/create', 'Controllers\Admin\OperatorController@postCreate');
    Route::get('operator/{operatorId}/edit', array('as' => 'update/operator', 'uses' => 'Controllers\Admin\OperatorController@getEdit'));
    Route::post('operator/{operatorId}/edit', 'Controllers\Admin\OperatorController@postEdit');
    Route::get('operator/{operatorId}/delete', array('as' => 'delete/operator', 'uses' => 'Controllers\Admin\OperatorController@getDelete'));

});

