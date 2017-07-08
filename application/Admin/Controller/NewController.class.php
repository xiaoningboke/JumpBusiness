<?php
/**
 * 后台首页
 */
namespace Admin\Controller;

use Common\Controller\AdminbaseController;

class NewController extends AdminbaseController {
        public function index()
        {
            $m = M('Resources');
            $data=$m->select();
            $this->assign('data',$data);
            $this->display();
        }
        public function add(){
            $this->display();
        }
        public function addmess()
        {
            $User = M("Resources"); // 实例化User对象
            $data['name'] = $_POST['name'];
            $data['material'] = $_POST['material'];
            $data['specifications'] = $_POST['specifications'];
            $data['number'] = $_POST['number'];
            $s=$User->add($data);
            if($s>0){
                $this->success("添加成功",U('New/index'));
            }else{
                $this->error("添加失败");
            }
        }
        public function edit()
        {
            $id = $_GET['id'];
            $m = M('Resources');
            $data = $m->where("Id=$id")->find();
            $this->assign("data",$data);
            $this->display();
        }
        public function editmess()
        {
            $User = M("Resources"); // 实例化User对象
            $id=$_POST['id'];
            $data['name'] = $_POST['name'];
            $data['material'] = $_POST['material'];
            $data['specifications'] = $_POST['specifications'];
            $data['number'] = $_POST['number'];
            $s=$User->where("id=$id")->save($data);
            if($s>0){
                $this->success("修改成功",U('New/index'));
            }else{
                $this->error("修改失败");
            }
        }
        public function delete()
        {
            $id = $_GET['id'];
            $User = M("Resources"); // 实例化User对象
            $s=$User->where("id=$id")->delete();
             if($s>0){
                $this->success("删除成功",U('New/index'));
            }else{
                $this->error("删除失败");
            }
        }
}
