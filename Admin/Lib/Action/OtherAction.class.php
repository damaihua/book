<?php
          // 本类由系统自动生成，仅供测试用途
    class OtherAction extends PublicAction {
        public function index(){
        	if(!session('admin_name')){
        		$this->redirect('login/index');

        	}else{
        		$this->display();
        	   }
        	
        }




          //单页管理页面
          public function page_main(){
              
               $Pages = D('Pages');
                // 导入分页类
                import('ORG.Util.Page');
                // 查询满足要求的总记录数
                $count = $Pages->count();
                // 实例化分页类 传入总记录数和每页显示的记录数
                $Page = new Page($count,12);
                // 分页显示输出
                $show = $Page->show();
                $data=$Pages->limit($Page->firstRow.','.$Page->listRows)->select();
                // 赋值数据集
                $this->assign('data',$data);
                // dump($books);
                // 赋值分页输出
                $this->assign('page',$show);

                $this->display();

              
             }   





          //增加单页页面

          public function page_add(){

               $this->display();

          }   



          //增加单页方法
          public function do_page_add(){


            $Pages = M('Pages');
            
            if($Pages->create()){

                  $result = $Pages->add();

              if($result){

                  $this->success('输入成功',U('Other/page_main'));

              }else{

                  $this->error('输入失败，请重新输入');

              }
            }else{

                  $this->error($Pag->getError());

            }
           
          }   




          //单页的删除操作
          public function page_del(){

            $Pages = M('Pages');
            $id = $_GET['id'];

            if($Pages->delete($id)){

                $this->success('删除成功',U('Other/page_main'));
            }else{


                $this->error('删除失败');
            }


          }   



          //修改单页页面

          public function page_edit(){

            $Pages = M('Pages');
            $id = $_GET['id'];
            $data = $Pages->find($id);
            $this->assign('data',$data);
            $this->display();

          }
          //处理修改单页操作方法
          public function do_page_edit(){
              $pages=M('Pages');
              $id=I('id');
              $data['title']=I('title');
              $data['content']=I('content');
              $data['public_time']=time();
              dump($data);exit;
              $pages->save($data);
          }
          //广告管理页面
          public function ad_main(){
               $Ad = D('Ad');
                // 导入分页类
                import('ORG.Util.Page');
                // 查询满足要求的总记录数
                $count = $Ad->count();
                // 实例化分页类 传入总记录数和每页显示的记录数
                $Page = new Page($count,10);
                // 分页显示输出
                $show = $Page->show();
                $data=$Ad->limit($Page->firstRow.','.$Page->listRows)->order('id desc')->select();
                // 赋值数据集
                $this->assign('data',$data);
                // dump($books);
                // 赋值分页输出
                $this->assign('page',$show);

                $this->display();
          
               }


          //添加广告页面
          public function ad_add(){
                      
             $this->display();
          }


          //操作添加广告的方法
          public function do_ad_add(){
              $Ad = M('Ad'); 

               //调用public中的上传类,实现图片上传功能
               $image = $this->upload('image','ad','90','100');
               if($image){
                  $data['image']=$image;

               }
               
              //获取提交的表单的值
                $data['name'] = I('name');
                $data['url'] = I('url');
                if($Ad->add($data)){

                    $this->success('添加成功',U('Other/ad_main'));

                }else{

                    $this->error('添加失败',U('Other/ad_add'));    
                }
          }

          //广告删除的方法
          public function ad_del(){

              $Ad = D('Ad');
              $id = $_GET['id'];
              if($Ad->delete($id)){

                $this->success('删除成功，返回广告列表页面',U('Other/ad_main'));

              }else{

                $this->error('删除失败，请重新删除');

              }

          }

          //修改广告页面
          public function ad_edit(){
               $Ad = M('Ad');
               $id = $_GET['id'];
               $data = $Ad->select($id);
               $this->assign('data',$data); 
               $this->display();   

           }
          
           // 修改广告的方法
          public function do_ad_edit(){
              $Ad = M('Ad');
            //调用public中的上传类,实现图片上传功能
               $image = $this->upload('image','ad','90','100');

               if($image){
                  $data['image'] = $image;
               }
                            
               $data['name'] = I('name'); 
               $data['url'] = I('url');
               $id = I('id');
               $result = $Ad->where("id=$id")->save($data);
               if($result){

                  $this->success('广告修改成功');
               }elseif($result===0){
                  $this->error('广告未做修改');
               }else{
                  $this->error('广告修改失败，请重新修改');
               }

          }
          //公告页面
          public function notice_main(){
              $notice=M('Notice');
              $data=$notice->select();
              // dump($data);exit;
              $this->assign('data',$data);
              $this->display();
          }
          //增加公告页面
          public function notice_add(){
              
              $this->display();
          }
          //修改公告页面
          public function notice_edit(){
              $id=$_GET['id'];
              $notice=M('Notice');
              $data=$notice->find($id);
              // dump($data);exit;
              $this->assign('data',$data);
              $this->display();
          }
          //处理修改公告方法
          public function do_notice_edit(){
              $id=I('id');
              $notice=M('Notice');
              $data['title']=I('title');
              $data['admin_name']=session('admin_name');
              $data['content']=I('content');
              $data['time']=time();
              dump($data);exit;
              $result=$notice->where("id=$id")->save($data);
              if($result){
                  $this->success('公告修改成功！',U('other/notice_main'));
              }elseif($result===0){
                  $this->error('公告未做修改！');
              }else{
                  $this->error('公告修改失败！');
              }
          }
          //删除公告方法
          public function notice_del(){
              $id=$_GET['id'];
              $notice=M('Notice');
              $result=$notice->delete($id);
              if($result){
                  $this->success('公告删除成功！');
              }else{
                  $this->error('公告删除失败');
              }
          }
          //友情链接管理页面
          public function link_main(){
               $Link=M('Link');
                // 导入分页类
                import('ORG.Util.Page');
                // 查询满足要求的总记录数
                $count = $Link->count();
                // 实例化分页类 传入总记录数和每页显示的记录数
                $Page = new Page($count,10);
                // 分页显示输出
                $show = $Page->show();
                $data=$Link->limit($Page->firstRow.','.$Page->listRows)->order('id desc')->select();
                // 赋值数据集
                $this->assign('data',$data);
                // dump($books);
                // 赋值分页输出
                $this->assign('page',$show);

                $this->display();
          }

          //友情链接的修改模板
          public function link_edit(){

                $id=$_GET['id'];
                $Link = M('Link');
                $data = $Link->select($id);
                // dump($data);
                $this->assign('data',$data);
                $this->display();

          }


          //修改友情链接的方法
          public function do_link_edit(){
               $link = M('Link');
               $link->create();
               $result=$link->save();
               if($result){
                  $this->success('友情链接修改成功','__APP__/other/link_main');
               }elseif($result===0){
                  $this->error('友情链接未修改');
               }else{
                  $this->error('友情链接修改失败');
               }
          }
          //友情链接删除方法
          public function link_del(){
                //实例化一个模型类
                $Link = D('Link');
                $id=$_GET['id'];
                if($Link->delete($id)){

                    $this->success('删除成功，返回链接列表');

                }else{
                    $this->error('删除失败，请重新删除');
                     }
              }
                 

        }  
