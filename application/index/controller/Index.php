<?php
namespace app\index\controller;
use think\captcha\Captcha;

class Index
{
    public function index()
    {
        return '合一设计教育';
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
