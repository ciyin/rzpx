<?php
/**
 * Created by PhpStorm.
 * User: 赐音
 * Date: 2017/1/24
 * Time: 10:44
 */
class ShowPage extends Action{
//    用户列表
    public function showUsers(){
        $this->smarty->assign('title','用户列表');
        $tabs=<<<TABS
<li class="active"><a href="index.php?controller=showPage&action=showUsers" target=_blank>用户列表</a></li>
<li><a href="index.php?controller=showPage&action=showProjects" target=_blank>培训内容</a></li>
<li><a href="index.php?controller=showPage&action=showLogs" target=_blank>培训记录</a></li>
TABS;
        $this->smarty->assign('tabs',$tabs);
        $this->smarty->assign('user',$_SESSION['user']);
        $result=$this->model->user_list();
        $this->smarty->assign('lists',$result);
        $this->smarty->display('header.php');
        $this->smarty->display("users_list_1.php");
        $this->smarty->display("users_list_2.php");
        $this->smarty->display("users_list_3.php");
        $this->smarty->display("footer.php");
    }
//    培训内容
    public function showProjects(){
        $this->smarty->assign('title','培训内容');
        $this->smarty->assign('user',$_SESSION['user']);
        $this->smarty->assign('username',$_SESSION['user']);
        if ($_SESSION['roles_id']==9){
            $tabs=<<<TABS
<li><a href="index.php?controller=showPage&action=showUsers" target=_blank>用户列表</a></li>
<li class="active"><a href="index.php?controller=showPage&action=showProjects" target=_blank>培训内容</a></li>
<li><a href="index.php?controller=showPage&action=showLogs" target=_blank>培训记录</a></li>
TABS;
            $this->smarty->assign('tabs',$tabs);
            $result=$this->model->show_projects();
            $this->smarty->assign('projects',$result);
            $this->smarty->display('header.php');
            $this->smarty->display('training_projects_1.php');
            $this->smarty->display('training_projects_4.php');
            $this->smarty->display('training_projects_3.php');
            $this->smarty->display('footer.php');
        }else{
            $this->smarty->assign('title','培训内容');
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
    }
//    详细培训内容
    public function showProjectDetails(){
        $this->smarty->assign('title','培训内容');
        $this->smarty->assign('user',$_SESSION['user']);
        $this->smarty->assign('username',$_SESSION['user']);
        $tabs='<li class="active"><a href="index.php?controller=showPage&action=showProjects" target="_self" onclick="log()">培训内容</a></li>';
        $this->smarty->assign('tabs',$tabs);
        if ($_GET['role']){
            $page='projects_'.$_GET['role'].'.php';
        }else{
            $page='projects_'.$_SESSION['roles_id'].'.php';
        }
        $this->smarty->display('header.php');
        $this->smarty->display($page);
        $this->smarty->display('footer.php');
    }
//    培训记录
    public function showLogs(){
        $this->smarty->assign('title','培训记录');
        $tabs=<<<TABS
<li><a href="index.php?controller=showPage&action=showUsers" target=_blank>用户列表</a></li>
<li><a href="index.php?controller=showPage&action=showProjects" target=_blank>培训内容</a></li>
<li class="active"><a href="index.php?controller=showPage&action=showLogs" target=_blank>培训记录</a></li>
TABS;
        $this->smarty->assign('tabs',$tabs);
        $this->smarty->assign('user',$_SESSION['user']);
        $result=$this->model->logs();
        $this->smarty->assign('logs',$result);
        $this->smarty->display('header.php');
        $this->smarty->display('training_log_1.php');
        $this->smarty->display('training_log_2.php');
        $this->smarty->display('training_log_3.php');
        $this->smarty->display('footer.php');
    }
}