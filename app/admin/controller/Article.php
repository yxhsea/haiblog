<?php
/**
 * author      : Yxhsea.
 * email       : Yxhsea@foxmail.com
 * createTime  : 2017/8/24 20:15
 * description :
 */
namespace app\admin\controller;

class Article extends Base{
    public function index(){
        return $this->fetch();
    }

    public function add(){
        return $this->fetch();
    }
}