<?php
/**
 * 管理首页.
 * User: Pengfan
 * Date: 2018/12/5
 * Time: 13:06
 */
namespace app\admin\controller;

use app\Base;
use think\Hook;

class Index extends Base
{


    /**
     * 后台面板
     */
    public function index()
    {
        return $this->fetch();
    }



    public function ok()
    {
        $result = Hook::exec('app\\admin\\behavior\\Test','run',$params);
        $token = $this->request->token('__token__', 'sha1');
        $data = [
            'name' => 1,
            'email' => 1
        ];
        $result = $this->validate($data,'User.edit');
        if(true !== $result){
            // 验证失败 输出错误信息
            dump($result);
        }
        exit;
       return $this->loadView();
    }


}