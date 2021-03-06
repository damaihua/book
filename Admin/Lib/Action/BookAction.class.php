<?php
		/*后台管理小说的控制器book_list
		*管理小说分类
		*管理小说的章节
		*/
class BookAction extends PublicAction {
    //小说管理页面
    public function book_main(){
        //检测是否登录
        $this->islogin();
        $book=M('Book');
        // 导入分页类
        import('ORG.Util.Page');
        // 查询满足要求的总记录数
        $count = $book->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new Page($count,10);
        // 分页显示输出
        $show = $Page->show();
        $books=$book->limit($Page->firstRow.','.$Page->listRows)->select();
        //$data['book_cat']=I('book_cat');
        // 赋值数据集
        $this->assign('books',$books);
        // 赋值分页输出
        $this->assign('page',$show);
        $this->display();
    }
    public function book_add(){
        $this->islogin();
        $cats=D('Cats');
        $catlist=$cats->selectCats(0);
        $proglist=$cats->selectCats(1);
        $this->assign('catlist',$catlist);
        $this->assign('proglist',$proglist);
        $this->display();
    }
    // new-add 添加书籍
    public function book_insert(){
        $this->islogin();
        //判断是否是通过表单提交的
        if(I('submit')){
            //实例化一个book类
            $book=M('Book');
            $cats=M('Cats');
            $data['book_name']=I('book_name');
            $data['flags']=implode(',', I('flags'));
            $data['book_cat']=I('book_cat');
            $data['progress']=I('progress');
            $data['book_info']=I('book_info');
            //$data['tags']=I('book_cat');
            
            $data['writer']=I('writer');
            $cat_id=I('book_cat');  //找到分类id
            //$book_cats=getData('Cats',$cat_id,'cat_name');
            $data['tags']=I('tags');


            $data['public_time']=time();//书籍的创建时间
            //调用public中的上传类,实现图片上传功能
            $cover = $this->upload('cover','cover','180','225');
            if($cover){
               $data['book_cover']=$cover;
            }
            // 判断输入是否存在
            $result=$book->where(array('book_name'=>I('book_name')))->find();
            if($result){
                $this->error('该书籍已经存在，请重新输入！');
            }

            $book->create();
            $result =  $book->add($data);
            
            if($result) {
                 //需要更新数据
                $total=getData('Cats',$cat_id,'total');  
                $data['total']=$total+1;//分类+1
                $condition['cat_id']=$cat_id;  // 条件
                $cats=$cats->where($condition)->setField($data);
                $this->success('小说添加成功！');
            }else{
                $this->error('小说添加失败！');
            }
        }
    }
    //小说审核页面
    public function book_edit(){
        $book_id=$_GET['book_id'];
        $this->assign('book_id',$book_id);
        $book=D('Cats');
        //调用选择分类列表
        $catlist=$book->selectCats(0);
        // 调用选择进度列表
        $proglist=$book->selectCats(1);
        //获取推荐位信息
        $flags=getData('Book',$book_id,'flags');
        $array=explode(',', $flags);
        if(in_array('a', $array)){

        }
        //dump($catlist);
        $this->assign('catlist',$catlist);
        $this->assign('proglist',$proglist);
        $this->display();
        //dump($catlist);
    }
    //小说审核方法
    public function do_book_edit(){
        $data['book_id']=I('book_id');
        $data['flags']=implode(',', I('flags'));
        $data['book_name']=I('book_name');
        $data['book_cat']=I('book_cat');
        $data['progress']=I('progress');
        $data['book_info']=I('book_info');
        $data['writer']=I('writer');
        //$cat_id=I('book_cat');
       // $book_cats=getData('Cats',$cat_id,'cat_name');
        //$data['tags']=$book_cats;
        $data['tags']=I('tags');
        
        //调用public中的上传类,实现图片上传功能
        $cover = $this->upload('cover','cover','180','225');
        $data['book_cover']=$cover;
        $book=D('Book');
        $book->create();
        $result=$book->save($data);
        if($result){
            $this->success('小说审核成功');
        }else{
            $this->error('小说审核失败');
            
        }
    }
    //小说删除方法
    public function book_del(){
        $cats=M('Cats');
        $book_id=$_GET['book_id'];
        $book=M('Book');
        // 检测该书籍是否有章节，如果有提示不允许删除，没有则可以删除
        $total=$book->where("book_id=$book_id")->getField('total');
        
        $cat_id=getData('Book',$book_id,'book_cat');
        if($total){
            $this->error('该小说有章节，不允许删除！');
        }else{
            $result=$book->where("book_id=$book_id")->delete();
            if($result){
                 //需要更新数据
                 $total=getData('Cats',$cat_id,'total');
                 $data['total']=$total-1;
                 $condition['cat_id']=$cat_id;  // 条件
                 $cats=$cats->where($condition)->setField($data);
                 
                $this->success('小说删除成功！');
            }else{
                $this->erroe('小说删除失败！');
            }
           
        }
    }
    //章节管理页面
    public function chapter_main(){
        $chapter=M('Chapter');
        // 导入分页类
        import('ORG.Util.Page');
        // 查询满足要求的总记录数
        $count = $chapter->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new Page($count,10);
        // 分页显示输出
        $show = $Page->show();
        $data=$chapter->limit($Page->firstRow.','.$Page->listRows)->select();
        // 赋值数据集
        $this->assign('chapter',$chapter);
               
        $this->assign('data',$data);
        $this->assign('page',$show);
        $this->display();
    }
    //chapter_edit
    public function chapter_edit(){
        $chapter_id=$_GET['chapter_id'];
        $chapter=M('Chapter');
        $chapter=$chapter->find($chapter_id);
        $this->assign('chapter_id',$chapter_id);
        $this->assign('chapter',$chapter);
        $this->display();
    }
    //修改章节
    public function do_chapter_edit(){
        $this->islogin();
        $chapter=D('chapter');
        $book=M('Book');
        $chapter->create();
        $score=getData('Chapter',I('chapter_id'),'much');  //原来的 所需积分
        $size=getData('Chapter',I('chapter_size'),'much');
        //dump(I('chapter_id'));
        $book_id=getData('Chapter',I('chapter_id'),'book_id');

        $data['chapter_id']=I('chapter_id');
        $data['chapter_title']=I('chapter_title');
        $data['charge']=I('charge');
        $data['much']=I('chapter_much');
        $data['content']=I('chapter_content');
        $data['update_time']=time();
        $data['chapter_size']=mb_strlen(I('chapter_content'),"utf-8");

        $dissize=mb_strlen(I('chapter_content'),"utf-8")-$size;
        $disscore=I('chapter_much')-$score; //积分变化
        $bookList=$book->where(array('book_id'=>$book_id))->find();
        $count= $bookList['needscore']+$disscore;
        $allsize=$bookList['book_size']+$dissize;
        $result=$chapter->save($data);

        if($result){
            
            if($disscore){
                $data['needscore']= $count; //改变的数据
                $condition['book_id']=$book_id;  // 条件
                $score=$book->where($condition)->setField($data);
            }
            if($dissize){
                $data['book_size']= $allsize; //改变的数据
                $condition['book_id']=$book_id;  // 条件
                $score=$book->where($condition)->setField($data);
            }
            $this->success('章节修改成功');
        }else{
           
            $this->error('章节修改失败');
            
        }
    }
    public function chapter_add(){
        $book_id=$_GET['book_id'];
        $book_name=getData('Book',$book_id,'book_name');
        $this->assign('book_id',$book_id);
        $this->assign('book_name',$book_name);
        $this->display();
    }
    // add 添加章节
    public function chapter_insert(){
        $this->islogin();
        //判断是否是通过表单提交的
        if(I('submit')){
            //实例化一个类
            $chapter=M('Chapter');
            $book=M('Book');
            $book_id=I('book_id');
            $book_name=I('book_name');  //disabled  无法获取到
            $chapter_title=I('chapter_title');
            $result=$chapter->where(array('chapter_title'=>$chapter_title))->find();
            if($result){
                $this->error('该章节已经存在，请重新输入！');
            }
            
            //获取 章节所对应的book中的相关数据
            $bookList=$book->where(array('book_id'=>$book_id))->find();
            //保存数据到chapter
            $data['chapter_title']=I('chapter_title');
            $data['content']=I('chapter_content'); 
            $data['much']=I('chapter_much'); 
            $data['charge']=I('charge');
            $data['update_time']=time();
            $data['book_name']=I('book_name');
            $data['book_id']=$book_id;
            $data['chapter_size']=I('chapter_content'); 
            $data['chapter_size']=mb_strlen(I('chapter_content'),"utf-8");
            $chapter->create();
            $result = $chapter->add($data);
            
            if($result) {
                //是否免费score 保存到book  章节总数+1
                $count= $bookList['needscore']+I('chapter_much'); //所需积分相加
                $size=$bookList['book_size']+mb_strlen(I('chapter_content'),"utf-8");// 字数
                $data['needscore']= $count;   //需要更新数据
                $data['total']=$bookList['total']+1;
                $data['update_time']=time();
                $data['book_size']=$size;
                $condition['book_id']=$book_id;  // 条件
                $score=$book->where($condition)->setField($data);
                $this->success('章节添加成功！');
            }else{
                echo 'false'; exit;
                $this->error('章节添加失败！');
            }
        }


    }
    //章节删除方法
    public function chapter_del(){
        $id=$_GET['id'];
        $chapter=M('Chapter');
        $book=M('Book');
        $book_id=getData('Chapter',$id,'book_id');
        $needscore=getData('Chapter',$id,'much');
        $dis=getData('Book',$book_id,'needscore')-$needscore;
        
        $result=$chapter->delete($id);

        if($result){
            $data['needscore']=$dis ;   //需要更新数据
            $data['total']=$bookList['total']-1;
            $condition['book_id']=$book_id;  // 条件
            $score=$book->where($condition)->setField($data);
            $result=$chapter->delete($id);
                $this->success('章节删除成功！');
            }else{
                $this->erroe('章节删除失败！');
            }
    }
    //小说分类管理页面
    public function cat_main(){
        //检测是否登录
        $this->islogin();
        $cats=M('Cats');
        //  // 导入分页类
        //  import('ORG.Util.Page');
        //  // 查询满足要求的总记录数
        //  $count = $cats->count();
        //  // 实例化分页类 传入总记录数和每页显示的记录数
        //  $Page = new Page($count,5);
        //  // 分页显示输出
        //  $show = $Page->show();
        // $data=$cats->limit($Page->firstRow.','.$Page->listRows)->select();

         // 赋值数据集
         $cats=$cats->where('type=0')->order('ordernum asc')->select();
      
        //分配数据并将数据输出到模板
        // $this->assign('data',$data);
        // $this->assign('page',$show);
        $this->assign('cats',$cats);
       
        $this->display();

         

    }
    //添加分类页面
    public function cat_add(){
        //检测是否登录
        $this->islogin();
        //调用模板文件
        $this->display();
        
    }
    //增加分类方法
    public function insert(){
        $this->islogin();
        //判断是否是通过表单提交的
        if(I('submit')){
            //实例化一个cats类
            $cats=M('Cats');
            // 判断输入分类是否存在
            $result=$cats->where(array('cat_name'=>I('cat_name')))->find();
            if($result){
                $this->error('该分类已经存在，请重新输入！');
            }
            $cats->create();
            $result =  $cats->add();
            
            if($result) {
                $this->success('分类添加成功！');
            }else{
                $this->error('分类添加失败！');
            }
        }
    }
    


    //显示修改分类页面
    public function cat_edit(){
        //检测是否登录
        $this->islogin();
        $cid=$_GET['cid'];
        $cats=M('Cats');
        $cat=$cats->find($cid);
        $this->assign('cat',$cat);
        $this->display();
    }
    //修改分类方法
    public function update(){
        //检测是否登录
        $this->islogin();
        //实例化一个cats类
        $cats=D('Cats');
        //判断修改后的分类名是否与其他分类重复
        $num=$cats->where(array('cat_name'=>I('cat_name')))->count('cat_id');
        if($num>1){
            $this->error('该分类已经存在，请重新输入！');
        }
    //     $data['cat_id']=I('cat_id');
    //    $data['status']=I('status');
    //    $data['cat_name']=I('cat_name');
    //     $data['cat_sortname']=I('cat_sortname');
    //     $data['ordernum']=I('ordernum');

        $book=M('Book');
        $cats->create();
        $result = $cats->save();
        $cat_id=I('cat_id');
        

        if($result) {
            $data['cat_name']=I('cat_name');//需要更新数据
            $condition['book_cat']=$cat_id;  // 条件
            $score=$book->where($condition)->setField($data);
            $this->success('分类修改成功！');
        }else{
            $this->error('分类修改错误！');
        }
         
    }
    //删除分类方法
    public function cat_del(){
        //检测是否登录
        $this->islogin();
        $cid=$_GET['cid'];
        $cats=M('Cats');
        $cat=$cats->find($cid);

        if($cat['total']){
            $this->error('该分类下还有小说，不允许删除！');
        }
        
        if($cats->delete($cid)){
            $this->success('该分类删除成功');
        }
        
    }

}