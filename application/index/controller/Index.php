<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\captcha\Captcha;
// use think\facade\Cache;

// use app\common\Test;
// use app\facade\Test as Test2;

use think\facade\Hook;
// use think\facade\Request;

class Index extends Controller
{
    // protected $middleware = [
    //     'Check'
    // ];

    public function index()
    {
        Hook::listen('test_beh');
        echo ' test';

    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function verify()
    {
        $captcha = new Captcha();
        return $captcha->entry();
    }

    public function heyi(Request $request, $name)
    {
        if ($name == 'shilun') {
            $name = '史论课程';
        }
        return '合一设计教育' . $name . $request->teacher;
    }

    public function shilun()
    {
        return '史论课程列表页';
    }


}
