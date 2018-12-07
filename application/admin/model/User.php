<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/6
 * Time: 9:01
 */
namespace app\admin\model;

use think\Validate;

class User extends Validate
{



    protected $rule = [
        'name'  =>  'require|max:25',
        'email' =>  'email',
    ];


    protected $message = [
        'name.require'  =>  '用户名必须',
        'email' =>  '邮箱格式错误',
    ];


    protected $scene = [
        'add'   =>  ['name','email'],
        'edit'  =>  ['email'],
    ];




}