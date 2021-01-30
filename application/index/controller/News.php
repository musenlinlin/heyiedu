<?php
namespace app\index\controller;
use think\Controller;

class News extends Controller 
{
    public function index()
    {
        return 'News index';
    }

    public function read($id)
    {
        $url = url('new_read', ['id' => $id]);
        // return 'News read ' . $id;
        return $url;
    }

    public function create()
    {
        return 'News create';
    }

    public function category($cate)
    {
        return 'category ' . $cate;
    }





}
