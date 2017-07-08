<?php

namespace Portal\Controller;
use Common\Controller\HomebaseController;
/**
 * 首页
 */
class IndexController extends HomebaseController {

    //首页
	public function index() {
            $m = M('Qindex');
            $data=$m->select();
            $this->assign("data",$data);
            $s = M('Resources');
            $name = $s->select();
            $this->assign("name",$name);
    	$this->display(":index");
    }

}


