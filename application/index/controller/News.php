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
        return 'News read' . $id;
    }

    public function create()
    {
        return 'News create';
    }
}
