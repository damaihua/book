<?php
class PublicAction extends Action{
	//自动验证网站是否关闭方法(仅前台类继承)
    Public function _initialize(){
        $siteset=M('Siteset');
        $result=$siteset->find(1);
        if($result['site_status']==0){
        	echo $result['close_info'];
        	exit;
        }
    }
    //登录状态检测方法
    public function islogin(){
        if(!session('user_name')){
            $this->redirect('member/login');
        }
    }
	//验证码方法
    Public function verify(){
        import('ORG.Util.Image');
        Image::buildImageVerify();
    }
    //文件上传方法
    // *@param string $buttonname 文件上传域name值
    // *@param string $uploaddir 文件上传目录，该目录不存在会自动创建该目录于uploads/文件夹下
    // *@param int $twidth 缩略图图片宽度
    // *@param int $theight 缩略图图片高度
  
    public function upload($buttonname,$uploaddir,$twidth,$theight) {
        $tmp_name=$_FILES[$buttonname]['tmp_name'];
        if(file_exists($tmp_name)){        
            import('ORG.Net.UploadFile');
            // 实例化上传类
            $upload = new UploadFile();
            // 设置附件上传大小
            $upload->maxSize  = 3145728 ;
            // 设置附件上传类型
            $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');
            // 设置附件上传目录
            $uploaddir=$upload->savePath =  './Uploads/'.$uploaddir.'/';

            //开启缩略图
            $upload->thumb=ture;
            //设置缩略图最大宽度
            $upload->thumbMaxWidth=$twidth;
            //设置缩略图最大高度
            $upload->thumbMaxHeight=$theight;

            if(!$upload->upload()) {// 上传错误提示错误信息
            $this->error($upload->getErrorMsg());
            }else{// 上传成功 获取上传文件信息
            $info =  $upload->getUploadFileInfo();
            $url=$uploaddir."/thumb_".$info[0]['savename'];
            $url=ltrim($url,'.');
            return $url;
            }
        }
         
    }

}
