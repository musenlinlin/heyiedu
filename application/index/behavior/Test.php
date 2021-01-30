<?php
namespace app\index\behavior;


class Test 
{
    public function run($params)
    {
        echo 'application is running ';
    }

    // 行为类绑定多个钩子时，方法名使用首字母小写的驼峰写法，方法名与钩子名称相匹配
    public function testBeh($params)
    {
        echo 'test_beh';
    }
}