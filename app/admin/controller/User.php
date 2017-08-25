<?php
/**
 * author      : Yxhsea.
 * email       : Yxhsea@foxmail.com
 * createTime  : 2017/8/25 21:43
 * description :
 */
namespace app\admin\controller;
class User extends Base{
    public function index(){
        return $this->fetch();
    }
}