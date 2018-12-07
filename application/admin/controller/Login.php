<?php
/**
 * 用户登录.
 * User: Pengfan
 * Date: 2018/12/6
 * Time: 9:28
 */
namespace app\admin\controller;

use app\Base;

class Login extends Base
{

    /**
     * 登陆页
     */
    public function login()
    {
        return $this->fetch();
    }


    /**
     * 登录
     */
    public function doLogin()
    {
        $params = $this->params;
        $result = $this->validate($params,'User.login');
        if(true !== $result){
            // 验证失败 输出错误信息
            dump($result);
        }
    }



}