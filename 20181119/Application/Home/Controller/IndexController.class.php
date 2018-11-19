<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $zi = I('post.zi');
        $where = "title like '%$zi%'";
        $User = M('textlist'); // 实例化User对象
        $count = $User->where($where)->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count, 5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->where($where)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板


    }

    public  function  content(){
        $id = I('get.id');
        $where = "id=".$id;
        $User = M('textlist'); // 实例化User对象
        $count = $User->where($where)->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count, 5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->where($where)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板

    }
    public  function  del(){
        $id = I('get.id');
        $where = "id=".$id;
        $User = M("textlist"); // 实例化User对象
        $res=$User->where($where)->delete(); // 删除id为5的用户数据
        if ($res) {

            $this->success('删除成功',U('index/index'));
        }else{

            $this->error('删除失败！');
        }

    }

}