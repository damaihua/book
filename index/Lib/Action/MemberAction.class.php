<?php
// 会员模块
class MemberAction extends PublicAction {
	//默认index方法进入会员中心
    public function index(){
        $user_id=session('user_id');
        //显示会员信息
        $user_info=M('User_info');
        $userinfo=$user_info->where("user_id=$user_id")->find();
        $user=M('User');
        $user=$user->where("user_id=$user_id")->find();
        //阅读历史
        $history=D('History');
        $data=$history->relation(true)->select();
        // dump($data);exit;
        //如果会员类型为普通会员(type=1),则转跳到会员中心
        if(session('user_type')==1){
            $this->assign('user_id',$user_id);
            $this->assign('user',$user);
            $this->assign('userinfo',$userinfo);
            $this->assign('data',$data);
            $this->display('Member/index');
        }
        //如果会员类型为作者(type=2),则转跳到作者中心
        elseif(session('user_type')==2){
            $this->assign('user_id',$user_id);
            $this->assign('user',$user);
            $this->assign('userinfo',$userinfo);
            $this->assign('data',$data);
            $this->display('Member/author');
        }else{
             $this->redirect('Member/login');
        }  
        

    }
   
    //调用会员登录模板方法
    public function login(){
        //如果会员类型为普通会员(type=1),则转跳到会员中心
        if(session('user_type')==1){
            $this->redirect('Member/index');
        }
        //如果会员类型为作者(type=2),则转跳到作者中心
        elseif(session('user_type')==2){
            $this->redirect('Member/author');
        }else{
             $this->display('Member/login');
        }  
    }
    //会员登录验证方法
    public function checklogin(){
        //判断是否是经过表单提交的数据,如果不是返回登录页面 
        if(!I('submit')){
            $this->redirect('Member/login');
        }
        
        //实例化一个user类
        $user=M('User');
        //获取提交表单值
        $user_name=I('user_name');
        $user_pwd=md5(I('user_pwd'));
        //检验该用户是否存在
        $result=$user->where("user_name='$user_name'")->find();
        if(!$result){
            $this->error('该用户不存在！请重新输入用户名');
            
        }
        //检验该用户是否禁止登陆
        if($result['user_status']==0){
            $this->error('抱歉，该用户禁止登陆');

        }
        // 检验密码是否正确
        if($result['user_pwd']!=$user_pwd){
            $this->error('密码错误！请重新输入');

        }
        // 判断验证码是否正确
        if($_SESSION['verify']!=md5($_POST['verify'])){
           $this->error('验证码错误！！'); 
                  
        }
        //保存session值
        session('user_id',$result['user_id']);
        session('user_name',$result['user_name']);
        session('user_type',$result['user_type']);
        //如果会员类型为普通会员(type=1),则转跳到会员中心
        if(session('user_type')==1){
            $this->redirect('Member/index');
        }
        //如果会员类型为作者(type=2),则转跳到作者中心
        if(session('user_type')==2){
            $this->redirect('Member/author');
        }
    }
    //调用会员注册模板方法
    public function reg(){

        if(!ALLOW_REG){
            $this->error('抱歉，暂时不允许注册，正在返回网站首页','__ROOT__');
        }

    	$this->display();
    }
    //处理注册信息方法
    public function do_reg(){

    	// 判断验证码是否正确
    	if($_SESSION['verify']!=md5($_POST['verify'])){
	       $this->error('验证码错误！！');        
		}
		// 实例化模型类
		$User=M('User');
		// 构建写入会员主表的数据数组
		$data["user_name"] = I('user_name');     
		$data["user_pwd"] = md5(I('user_pwd'));     
		$data["user_email"] = I('user_email');      
		$data["reg_time"] = time();
		//将数据数组插入数据库，如果插入成功转跳到登录页面
        $id=$User->add($data);
        //同步更新到user_info表里
        $user_info=M('User_info');
        $data['user_id']=$id;
        $info=$user_info->add($data);
		if($id&&$info){
            
            //判断是否允许注册成功发送邮件
            // if(REG_SEND_EMAIL){
            //     //提示注册成功并转跳到会员中心 
            //     $address=I('user_email');
            //     $title='听雨轩在线书城会员注册提醒';
            //     $url="__APP__/member/login";
            //     $message="尊敬的".I('user_name').",你已经成功注册为".SITE_NAME."会员。";
            //     SendMail($address,$title,$message);
            // }
			$this->success('注册成功！正在转跳到登录页面……',U('Member/login/'));
		}else{
			$this->error('注册失败！正在返回注册页面……',U('Member/reg/'));
		}
    }
    
    //退出登录方法
    public function loginout(){
        session('user_name',null); // 清空当前的session
        session('user_type',null); // 清空当前的session
        session('email_status',null); // 清空当前的session
        $this->success('退出登录成功！','__URL__/login');
    }
    //头像修改页面
    public function avatar_edit(){
        //验证是否登录
        $this->islogin();
        //显示模板
        $this->display();
    }
    //处理头像修改方法
    public function do_avatar_edit(){
        //检测是否登录
        $this->islogin();

        $avatar=ltrim($_GET['url'],'../../');

        $user_info=M('User_info');
        $data['user_avatar']=$avatar;
        $user_id=session('user_id');
        // dump($data);exit;
        $result=$user_info->where("user_id=$user_id")->save($data);
        if($result){
            $this->error('头像修改成功！');
        }else{
            $this->success('头像修改失败！');
        }
    }
    //会员资料修改页面
    public function member_edit(){
        //检测是否登录
        $this->islogin();

        $user_id=session('user_id');
        $userinfo=M('User_info');
        $userinfo=$userinfo->where("user_id=$user_id")->find();
        //从user表里查询email
        $user=M('User');
        $user=$user->where("user_id=$user_id")->find();
        $user_email=$user['user_email'];
        $this->assign('user_email',$user_email);
        $this->assign('data',$userinfo);
        $this->display();
    }
    //处理会员资料信息修改方法
    public function do_member_edit(){
        //检测是否登录
        $this->islogin();

        $user_info=M('User_info');
        
        $data['user_nicename']=I('user_nicename');
        
        $data['user_sex']=I('user_sex');
        $data['user_info']=I('user_info');
        //email插入user表里
        $user=M('user');
        $data1['user_email']=I('user_email');
        $user_id=I('user_id');
        $result1=$user->where("user_id=$user_id")->save($data1);
        
        $result=$user_info->where("user_id=$user_id")->save($data);
        if($result === FALSE or $result1 === FALSE){
            $this->error('个人资料修改失败！');
        }elseif($result === 0 and $result1 === 0){
            $this->error('个人资料未做修改！');
        }else{
            $this->success('个人资料修改成功！');
        }
    }
    //密码修改页面
    public function pwd_edit(){
        //检测是否登录
        $this->islogin();

        $this->display();
    }
    public function do_pwd_edit(){
        //检测是否登录
        $this->islogin();

        $user_id=session('user_id');
        $user=M('User');
        $data=$user->field('user_pwd')->find($user_id);
        if($data['user_pwd']!=md5(I('oldpass'))){
            echo "<script>alert('原始密码错误');history.go(-1);</script>";
        }
        $user_pwd=md5(I('newpass'));
        $result=$user->where("user_id=$user_id")->setField('user_pwd',"$user_pwd");
        if($result){
            session('user_name','null');
            session('user_type','null');
            $this->success('密码修改成功，请重新登录','__APP__/member/login');
        }else{
            $this->error('密码修改错误');
        }
    }

    //发送邮件验证码方法
    public function sendcode(){
        //验证是否登录
        $this->islogin();
        if(session('email_status')==1){
            $this->error('验证邮件已经发送，请将邮箱里收到的6位验证码输入验证框！','__APP__/member/email_verify');
        }elseif(session('email_status')==3){
            $this->error('邮件已经经过验证，无需再验证！','__APP__/member/index');
        }else{
            //生成6位验证码
            $user_id=session('user_id');
            $user_email=getData('User',$user_id,'user_email');
            $key=md5($user_email);
            $key=substr($key, 0,6);
            $address=$user_email;
            $title='会员邮箱验证';
            $message="尊敬的听雨轩在线书城会员".$user_name.',欢迎注册听雨轩在线书城会员，本次验证码为'.$key;
            $result=SendMail($address,$title,$message);
            if($result){

                $this->success('验证邮件发送成功','__APP__/member/email_verify');

                session('email_status',1);
            }else{
                
                $this->error('验证邮件发送失败');
                session('email_status',0);
            }
        }
    }
    //邮箱验证页面
    public function email_verify(){
        //检测是否登录
        $this->islogin();
        //获取要验证的邮箱地址
        $user_id=session('user_id');
        $user_email=getData('User',$user_id,'user_email');
        $this->assign('user_email',$user_email);
        //显示模板
        $this->display();
        
    }
    //邮箱验证方法
    public function do_email_verify(){
        //验证是否登录
        $this->islogin();

        $vcode=md5(I('user_email'));
        $vcode=substr($vcode, 0,6);
        if($vcode===I('vcode')){
            session('email_status',3);
            $this->success('邮箱验证成功','__APP__/member/index');
        }else{
            $this->error('邮箱验证失败');
        }
        
    }
    //订阅记录页面
    public function order(){
        //验证是否登录
        $this->islogin();
        $order=D('Order');
        // 导入分页类
        import('ORG.Util.Page');
        // 查询满足要求的总记录数
        $count = $order->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new Page($count,15);
        // 分页显示输出
        $show = $Page->show();
		$chapterlist=$order->limit($Page->firstRow.','.$Page->listRows)->relation(true)->select();
        //dump($chapterlist);exit;
        $this->assign('page',$show);
        $this->assign('orderlist',$chapterlist);
        //显示模板
        $this->display();
    }
    //在线充值页面
    public function pay(){
        //验证是否登录
        $this->islogin();
        //显示模板
        $paycard=M('paycard');
        $data=$paycard->select();
        $this->assign('data',$data);
        $this->display();
    }
    //确认充值页面
    public function repay(){
        //检测是否登录
        $this->islogin();
        $paycard_id=I('paycard');
        $this->assign('paycard_id',$paycard_id);
        $this->display();
    }
    //处理充值方法
    public function do_pay(){
        //检测是否登录
        $this->islogin();
        $user_id=session('user_id');
        $user_info=M('User_info');
       
        $result=$user_info->where("user_id=$user_id")->setInc('user_score',I('score')); 
        if($result){
            $this->success('充值成功！正返回个人中心','__APP__/member/index');
        }else{
            $this->error('充值失败！','__APP__/member/pay');
        }
    }
 

    
}