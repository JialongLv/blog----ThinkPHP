<?php
namespace app\index\controller;
use think\Controller;

class Base extends Controller
{
     public function _initialize()
    {
        $this->nav();
         $this->hot();
    }

    public function nav(){
    	$navres= \think\Db::name('cate')->order('id asc')->select();
    	$this->assign('navres',$navres);
    }

    public function hot(){
    	$hotartres= \think\Db::name('article')->order('click desc')->limit(10)->select();
    	$this->assign('hotartres',$hotartres);
    }
}
