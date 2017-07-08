<?php
/**
 * 后台首页
 */
namespace Admin\Controller;

use Common\Controller\AdminbaseController;

class QindexController extends AdminbaseController {
    public function index(){
        $m=M('Qindex');
        $data = $m->select();
        $this->assign("data",$data);
        $this->display();
    }
    public function edit(){
        $m=M('Qindex');
        $data['content'] = $_POST['content'];
        $data['phone'] = $_POST['phone'];
        $m->where('id=1')->save($data);
        $this->upload();
    }
    public function upload(){
     $upload = new \Think\Upload();// 实例化上传类
     $oldFN = $_FILES;//获取图片的信息，在后面传给重命名函数
     $upload->maxSize = 3145728 ;// 设置附件上传大小
     $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
     $upload->rootPath = '.\themes\simplebootx\Public\assets\images/'; // 设置附件上传根目录
     $upload->savePath = ''; // 设置附件上传（子）目录
     $upload->replace = true;//如果存在同名文件就覆盖
     $upload->autoSub = false;//不使用子目录保存上传文件，即上传到指定的文件夹
     $upload->saveName = '';
     $info = $upload->upload();
     $this->renameFile($oldFN['photo']['name'], '.\themes\simplebootx\Public\assets\images/');//调用重命名函数
     if(!$info) {// 上传错误提示错误信息
            $this->success('上传成功！');
     }else{// 上传成功
             $this->success('上传成功！');
     }
     }
 public function renameFile($oldFN,$path){
for($i=0;$i<count($oldFN);$i++){
       // var_dump($oldFN);
         $newName = "zerozero".($i+1).".jpg";//新的名字
         rename($path.$oldFN[$i],$path.$newName);//重命名
         }
     }
}
