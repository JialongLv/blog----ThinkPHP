<?php
namespace app\admin\validate;

use think\Validate;

class Admin extends Validate
{
    protected $rule = [
        'username'  =>  'require|max:25|unique:admin',
        'password'  =>  'require|min:6',
    
    ];

    protected $message  =   [
        'username.require' => '用户名不能为空',
        'username.unique' => '用户名不能重复',
        'username.max'     => '用户名最多不能超过25个字符',
        'password.require' =>'密码不能为空',
        'password.min' => '密码不能少于6位',
         
        // 'age.number'   => '年龄必须是数字',
        // 'age.between'  => '年龄只能在1-120之间',
        // 'email'        => '邮箱格式错误',    
    ];

    protected $scene = [
        'edit'  =>  ['username'],
    ];


}