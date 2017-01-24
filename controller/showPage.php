<?php
/**
 * Created by PhpStorm.
 * User: 赐音
 * Date: 2017/1/24
 * Time: 10:44
 */
class ShowPage extends Action{
    public function showUsers(){
        echo 'users';
    }
    public function showProjects(){
        echo 'projects';
    }
    public function showLogs(){
        echo 'logs';
    }
    public function showProjectDetails(){
        $this->smarty->assign('user',$_SESSION['user']);
        $this->smarty->assign('username',$_SESSION['user']);
        $tabs='<li class="active"><a href="index.php?controller=showPage&action=showProjects" target="_self">培训内容</a></li>';
        $this->smarty->assign('tabs',$tabs);
        $page='projects_'.$_SESSION['roles_id'].'.php';
        $this->smarty->display('header.php');
        $this->smarty->display($page);
        $this->smarty->display('footer.php');
    }
}