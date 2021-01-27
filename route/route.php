<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('hello/:name', 'index/hello');

Route::rule('new/create', 'index/News/create');
Route::rule('new/:id', 'index/News/read');

// Route::get('blog/create', 'index/Blog/create');
// Route::get('blog', 'index/Blog/index');


// 资源路由
// Route::resource('blog', 'index/blog');
// Route::resource('blog','index/blog');
// Route::resource('api', 'index/api');
Route::resource('api/test', 'api/test');

return [

];
