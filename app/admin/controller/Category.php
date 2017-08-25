<?php
/**
 * author      : Yxhsea.
 * email       : Yxhsea@foxmail.com
 * createTime  : 2017/8/25 21:07
 * description :
 */
namespace app\admin\controller;
class Category extends Base{
    public function index(){
        return $this->fetch();
    }

    public function add(){
        return $this->fetch();
    }
}