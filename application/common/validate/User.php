<?php
/**
 * 验证类.
 * User: Pengfan
 * Date: 2018/12/6
 * Time: 9:16
 */
namespace app\common\validate;

use think\Validate;

class User extends Validate
{
    protected $rule = [
        'username'  =>  'require|max:25|token'
    ];

    protected $message = [
        'username.require'  =>  '用户名必须',
        'username.max:25'  =>  '用户名长度不能大于25位'
    ];

    protected $scene = [
        'login'   =>  ['username']
    ];
}