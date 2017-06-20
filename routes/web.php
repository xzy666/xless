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



//Route::any('/handle', 'EasyWechatController@handle');
Route::get('/about', 'MeController@about');

Route::get('/donate', function () {
    return view('pay');
});






//后台相关路由
Route::group(['namespace'=>'Blog','middleware'=>'web'],function (){


    Route::get('/admin/element','TimeController@element');
    Route::get('/admin/img','TimeController@img');
    Route::get('/admin/pass','TimeController@pass');
    Route::get('/admin/tab','TimeController@tab');


    Route::get('/admin/info','TimeController@info');//系统配置页

    //后台时间线
    Route::get('/admin/index','TimeController@index');
    //用户相关
    Route::get('/admin/login','UserController@login');//登录
    Route::get('/register','UserController@register');//注册
    Route::post('/registerRequest','UserController@registerRequest');//提交注册表单
    Route::get('/login','UserController@loginStage');//前台登录
    Route::post('/loginStageRequest','UserController@loginStageRequest');//提交前台登录表单
    Route::get('/logout','UserController@logout');//登出
    Route::post('/admin/loginRequest','UserController@loginRequest');//提交登录表单
    //文章
    Route::get('/admin/list','ArticleController@lists');//文章列表
    Route::get('/article/createpage','ArticleController@createpage');//文章创建页面
    Route::get('/article/editePage/{id}','ArticleController@editePage');//修改文章页面
    Route::post('/article/edite','ArticleController@edite');//提交修改文章
    Route::get('/article/delete/{id}','ArticleController@delete');//删除文章
    Route::get('/article/addpage','ArticleController@addpage');//添加文章页面
    Route::post('/article/add','ArticleController@add');//添加文章
    Route::post('/article/search','ArticleController@search');//搜索文章
    //标签分类
    Route::get('/category/addpage','CategoryController@addpage');//分类页面
    Route::any('/category/add','CategoryController@add');//添加分类
});

//前台相关路由
Route::group(['namespace'=>'Stage','middleware'=>'web'],function () {
//    Route::get('community','TimeLineController@timeline');
    //文章相关
    Route::get('article','TimeLineController@index');//前台文章时间线
    Route::get('article/{id}','TimeLineController@show');//前台文章页

});


//微信相关路由
Route::group(['namespace'=>'Wechat','middleware'=>'web'],function () {

    Route::any('/wechat', 'EasyWechatController@wechat');
    Route::any('/menus', 'EasyWechatController@menus');
    Route::any('/wechat/customerlist', 'EasyWechatController@getCustomerService');
    Route::get('/wechat/index', 'CommonController@index');

});
