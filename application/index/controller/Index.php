<?php
namespace app\index\controller;

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
}
