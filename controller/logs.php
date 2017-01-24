<?php
/**
 * Created by PhpStorm.
 * User: 赐音
 * Date: 2017/1/24
 * Time: 15:54
 */
class Logs extends Action{
    public function logAdd(){
        $connect=$this->model->connect;
        $array['users_id']=$_SESSION['users_id'];
        $array['video']=$_GET['text'];
        $array['watching_time']=time();
        $this->model->insert($connect,$array,'logs');
    }
    public function logSearch(){
        $result=$this->model->select_log($_POST['search_name']);
        $this->smarty->assign('logs',$result);
    }
}