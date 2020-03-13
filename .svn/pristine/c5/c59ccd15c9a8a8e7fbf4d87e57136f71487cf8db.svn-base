<?php
class PublicAction extends Action{
	//登录状态检测方法
	public function islogin(){
		if(!session('admin_name')){
    		$this->redirect('login/index');
    	}
	}
	
	//验证码方法
    Public function verify(){
        import('ORG.Util.Image');
        Image::buildImageVerify();
    }
 	//文件上传方法
    /*$buttonname:上传按钮name,*/
    public function upload($buttonname,$updir,$twidth,$theight) {
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
            $uploaddir=$upload->savePath =  './Uploads/'.$updir.'/';
            //开启缩略图
            $upload->thumb=ture;
            $upload->thumbMaxWidth=$twidth;
            $upload->thumbMaxHeight=$theight;
            if(!$upload->upload()) {// 上传错误提示错误信息
            $this->error($upload->getErrorMsg());
            }else{// 上传成功 获取上传文件信息
            $info =  $upload->getUploadFileInfo();
            $url=$uploaddir.$info[0]['savename'];
            $url=ltrim($url,'./');
            return $url;
            }
        }
         
    }
    
}
