<?php
/**
 * 所有程序基类.
 * User: Pengfan
 * Date: 2018/12/5
 * Time: 13:05
 */
namespace app;

use think\Controller;
use think\Request;

class Base extends Controller
{


    //参数集合
    public $params;


    //初始化
    public function _initialize()
    {
        parent::_initialize();
        $request = Request::instance();
        $controller = strtolower($request->controller());
        $paramName = "/{$request->module()}/{$controller}/{$request->action()}";
        $this->params = $request->except($paramName);
    }



    /**
     * 加载视图
     *
     * @param    array    $data   数据集合
     * @return   mixed
     */
    public function loadView($data = [])
    {
        $module = $this->request->module();
        $viewName = $this->params['viewName'];
        $fileName = $this->params['fileName'];
        $viewName = "$module@common/$viewName/$fileName";
        if($this->request->isPjax())
        {
            return $this->display($viewName,$data);
        }
        return $this->fetch($viewName,$data);
    }




}