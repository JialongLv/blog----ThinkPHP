<?php
namespace app\admin\validate;

use think\Validate;

class Link extends Validate
{
    protected $rule = [
        'title'  =>  'require|max:25|unique:link',
        'url'  =>  'require',
    
    ];

    protected $message  =   [
        'title.require' => '链接标题名称不能为空',
        'title.unique' => '链接标题名称不能重复',
        'title.max'     => '链接名称最多不能超过25个字符',
        'url.require' =>'链接地址不能为空',
        // 'age.number'   => '年龄必须是数字',
        // 'age.between'  => '年龄只能在1-120之间',
        // 'email'        => '邮箱格式错误',    
    ];

}