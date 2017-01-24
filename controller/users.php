<?php
/**
 * Created by PhpStorm.
 * User: 赐音
 * Date: 2017/1/23
 * Time: 17:22
 */
class Users extends Action{
    public function add(){
        $connect=$this->model->connect;
        $array['name']=$_POST['name'];
        $array['email']=$_POST['email'];
        $array['password']=$_POST['password'];
        $array['city']=$_POST['city'];
        $array['roles_id']=$_POST['roles_id'];
        $array['created_at']=time();
        $array['created_by']=$_SESSION['users_id'];
        $this->model->insert($connect,$array,'users');
        $result=$this->model->user_list();
        $this->smarty->assign('lists',$result);
        $this->smarty->display('users_list_2.php');
    }
    public function search(){
        echo $_POST['username'];
        $result=$this->model->search_user($_POST['username']);
        $row=$this->model->rows;
        if ($row){
            $this->smarty->assign('lists',$result);
            $this->smarty->display('users_list_2.php');
        }
    }
}