<?php
namespace app\index\controller;
use think\captcha\Captcha;
// use think\facade\Cache;

// use app\common\Test;
// use app\facade\Test as Test2;

class Index
{
    public function index()
    {
        \Cache::set('name', 'value');
        echo \Cache::get('name');

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


}
