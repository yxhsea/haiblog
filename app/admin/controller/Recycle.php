<?php
/**
 * author      : Yxhsea.
 * email       : Yxhsea@foxmail.com
 * createTime  : 2017/8/25 21:33
 * description :
 */
namespace app\admin\controller;
class Recycle extends Base {
    public function article(){
        return $this->fetch();
    }

    public function comment(){
        return $this->fetch();
    }

    public function chat(){
        return $this->fetch();
    }

    public function link(){
        return $this->fetch();
    }
}