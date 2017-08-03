<?php
namespace app\admin\validate;

use think\Validate;

class Article extends Validate
{
    protected $rule = [
        'title'  =>  'require|max:30|unique:article',
        'keywords'  =>  'require',
        'cateid'  =>  'require',
    
    ];

    protected $message  =   [
        'title.require' => '文章名称不能为空',
        'title.unique' => '文章名称不能重复',
        'title.max'     => '文章名称最多不能超过100个字符',  
        'keywords.require' =>'关键字不能为空',
        'cateid' => '栏目不能为空',
    ];


}