<?php
/**
 * author      : Yxhsea.
 * email       : Yxhsea@foxmail.com
 * createTime  : 2017/8/25 21:50
 * description :
 */
namespace app\admin\controller;
class Config extends Base {
    public function index(){
        return $this->fetch();
    }
}