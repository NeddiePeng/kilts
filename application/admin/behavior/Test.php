<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/6
 * Time: 9:22
 */
namespace app\admin\behavior;

class Test
{


    public function run(&$params)
    {
        // 行为逻辑
        var_dump($params);
    }


    public function app_init(&$params)
    {

    }

    public function app_end(&$params)
    {

    }



}