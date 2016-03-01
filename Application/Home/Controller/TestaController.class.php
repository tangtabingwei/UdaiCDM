<?php
namespace Home\Controller;
use Think\Controller;
class TestaController extends HomeController {
    public function test($value='')
    {
        if (IS_POST) {
            if (!empty($_FILES)) {
                $config = array(
                    'rootPath' => './Public/',
                    'savePath' => 'upload/',
                 );
                $upload = new \Think\Upload($config);
                $flag = $upload -> uploadOne($_FILES['avatar']);
                if (!$flag) {
                    var_dump($upload->getError());//获得上传附件产生的错误信息
                } else {
                    //拼装图片的路径名
                    $imgPath = $flag['savepath'].$flag['savename'];
                    $_POST['path'] = $imgPath;
                }
                $testModel = M('test');
                $testModel ->create();
                $z = $testModel->add();
                if ($z) {
                    $this->success('成功');
                } else {
                    $this->error('失败');
                }
                
            }
        } else {
            $this->display();
        }
        
        
    }
    


    
}