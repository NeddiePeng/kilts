<?php
/**
 * 公共控制类.
 * User: Pengfan
 * Date: 2018/12/6
 * Time: 9:29
 */
namespace app\admin\controller;

use app\Base;

class Common extends Base
{


    /**
     * 加载视图
     */
    public function logView()
    {
        $data = ['name' => 'success'];
        return $this->loadView($data);
    }

}