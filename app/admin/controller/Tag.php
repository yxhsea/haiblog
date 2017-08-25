<?php
/**
 * author      : Yxhsea.
 * email       : Yxhsea@foxmail.com
 * createTime  : 2017/8/25 21:00
 * description :
 */
namespace app\admin\controller;
class Tag extends Base{
    public function index(){
        return $this->fetch();
    }

    public function add(){
        return $this->fetch();
    }
}