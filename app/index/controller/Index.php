<?php


namespace app\index\controller;


use app\common\controller\IndexController;

class Index extends IndexController
{
    /**
     * 主页
     * @return string
     * @throws \Exception
     */
    public function index()
    {
        return $this->fetch();
    }

}