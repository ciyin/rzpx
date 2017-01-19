<?php
/**
 * Created by PhpStorm.
 * User: liudanxia
 * Date: 2016/12/22
 * Time: 15:18
 */
class Login extends Action {
//    登录
    public function loginCheck(){
//        验证用户名和密码
        $result = $this->model->verify($_GET['username'], $_GET['password']);
        $rows = $this->model->rows;
//        如果用户名和密码都正确，先给预定义的变量赋值再拼接页面
        if ($rows) {
//            1、将用户信息赋值给session
            $_SESSION['isLogin']=true;
            $_SESSION['user']=$result['name'];
            $_SESSION['user_id']=$result['id'];
            $_SESSION['role']=$result['roles'];
            $this->smarty->assign('user', $_SESSION['user']);
//            2、根据用户角色显示相应的内容
            echo $_SESSION['role'];

        } else {
            $this->smarty->display('loginfailed.php');
        }
    }
//    登出
    public function logout(){
        $_SESSION['isLogin']=false;
        $this->smarty->display('denglu.php');
    }
}