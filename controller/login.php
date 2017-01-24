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
        $result=$this->model->verify($_POST['username'],$_POST['password']);
        $rows=$this->model->rows;
//        如果用户名和密码都正确，先给预定义的变量赋值再拼接页面
        if ($rows) {
//            1、将用户信息赋值给session
            $_SESSION['isLogin']=true;
            $_SESSION['user']=$result['name'];
            $_SESSION['roles_id']=$result['roles_id'];
            $_SESSION['users_id']=$result['id'];
            $this->smarty->assign('user',$_SESSION['user']);
//            2、根据用户角色显示相应的内容
            if ($_SESSION['roles_id']==9){
                $tabs=<<<TABS
<li class="active"><a href="index.php?controller=showPage&action=showUsers" target=_blank>用户列表</a></li>
<li><a href="index.php?controller=showPage&action=showProjects" target=_blank>培训内容</a></li>
<li><a href="index.php?controller=showPage&action=showLogs" target=_blank>培训记录</a></li>
TABS;
                $result=$this->model->user_list();
                $this->smarty->assign('lists',$result);
                $this->smarty->assign('tabs',$tabs);
                $this->smarty->display('header.php');
                $this->smarty->display("users_list_1.php");
                $this->smarty->display("users_list_2.php");
                $this->smarty->display("users_list_3.php");
                $this->smarty->display("footer.php");
            }else{
                $tabs='<li class="active"><a href="index.php?controller=showPage&action=showProjects" target="_self">培训内容</a></li>';
                $this->smarty->assign('tabs',$tabs);
                $result=$this->model->show_project($_SESSION['roles_id']);
                $this->smarty->assign('result',$result);
                $this->smarty->assign('username',$_SESSION['user']);
                $this->smarty->display('header.php');
                $this->smarty->display('training_projects_1.php');
                $this->smarty->display('training_projects_2.php');
                $this->smarty->display('training_projects_3.php');
                $this->smarty->display('footer.php');
            }
//           如果用户名或密码输入错误，则显示错误界面，并在3秒后跳转回登录页面
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