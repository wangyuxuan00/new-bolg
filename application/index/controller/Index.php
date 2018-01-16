<?php
namespace app\index\controller;
use app\index\model\User;
use think\Controller;
use think\Request;

class Index extends Controller
{   
    public function base(){  
        return $this->fetch();  
    }    
    public function index(){
        $model = new User();
        $info = $model ->enquiries();
        $page = $info->render();
        $this->assign('page', $page);
        $this->assign('info',$info);
        return view();
    }
    public function about(){
        $model = new User();
        $info = $model ->sel('about',0);
        //dump($info);exit;
        $this->assign('info',$info);
        //dump($info['desc']);die;          
        return view();
    }
    public function doing(){
        $model = new User();
        $info = $model ->enquiries();
        $page = $info->render();
        $this->assign('page', $page);
        $this->assign('info',$info);
        return view();
    }
    public function saying(){
       return view();
    }
    public function particulars(){
        $id = input('id');
        $model = new User();
        $info = $model ->sel('doing',$id);
        //dump($info['title']);exit;
        $this->assign('info',$info);
        return view();
    }

     public function do(){
        $model = new User();
        $key = input('key');
        // $key = "网站建设";
        $data = $model ->enquiries($key);
        $this->assign('data',$data);
        return view();
    }
}
