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

// Route::get('hello/:name', 'index/hello');

// Route::rule('new/create', 'index/News/create');
// Route::rule('new/:id', 'index/News/read');

// Route::get('blog/create', 'index/Blog/create');
// Route::get('blog', 'index/Blog/index');


// 资源路由
// Route::resource('blog', 'index/blog');
// Route::resource('blog','index/blog');
// Route::resource('api', 'index/api');
// Route::resource('api/test', 'api/test');

// Route::rule('heyi/:name', 'index/heyi')->middleware('Check:admin');
// Route::rule('heyi/:name', 'index/heyi');

// Route::rule('new/:id', 'index/News/read');

// Route::get('new/:id', 'News/read');
// Route::post('new/:id', 'News/update');
// Route::put('new/:id', 'News/update');
// Route::delete('new/:id', 'News/delete');
// Route::any('new/:id', 'News/read');

// Route::rule('/', 'index');
// Route::rule('my', 'Member/myinfo');
// Route::rule('blog/:id', 'Blog/read');
// Route::rule('new/:year/:month/:day', 'News/read');
// Route::rule(':user/:blog_id', 'Blog/read');
// Route::get('blog/:year/[:month]', 'Blog/archive');

// Route::get('new/:cate$', 'News/category');

// Route::get('blog/:id', 'blog/read?status=1&app_id=5');

// Route::name('new_read')->rule('new/:id', 'index/News/read');
// Route::rule('new/:id', 'index/News/read')->name('new_read');

Route::get('new/:name', 'News/read')->pattern(['name' => '\w+']);
Route::get('new/:id', 'News/id')->pattern(['id' => '\s+']);











// return [

// ];
