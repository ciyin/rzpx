<?php
/**
 * Created by PhpStorm.
 * User: liuciyin
 * Date: 2017/1/18
 * Time: 15:28
 */
class Model{
    public $connect;
    public $rows;
//    连接数据库
    public function __construct()
    {
        $this->connect = mysqli_connect('localhost', 'root', '', 'rzpx');
    }
//    插入记录
    public function insert($connect,$array,$table){
        $fields=join(',',array_keys($array));
        $value="'".join("','",array_values($array))."'";
        $sql="INSERT {$table} ({$fields})VALUES({$value})";
        $result=mysqli_query($connect,$sql);
        return $result;
    }
//    查询所有用户列表：二维索引+关联数组
    public function user_list(){
        $sql="select * from users";
        $res=mysqli_query($this->connect,$sql);
        $result=mysqli_fetch_all($res,MYSQLI_ASSOC);
        $this->rows=mysqli_num_rows($res);
        return $result;
    }
//    根据姓名查询用户信息：一维关联数组
    public function select_user($name){
        $sql="select * from users WHERE name=$name";
        $res=mysqli_query($this->connect,$sql);
        $result=mysqli_fetch_assoc($res);
        $this->rows=mysqli_num_rows($res);
        return $result;
    }
//    根据角色名称查找角色id：一维索引数组
    public function select_roles_id($role){
        $sql="select id from roles WHERE role=$role";
        $res=mysqli_query($this->connect,$sql);
        $result=mysqli_fetch_row($res);
        return $result;
    }
//    根据用户角色显示相应的培训内容：二维索引+关联数组。$roles_id的格式为（'1','2'）
    public function show_project($roles_id){
        $sql="select a.role,b.project from roles AS a JOIN projects AS b ON a.id=b.roles_id WHERE b.roles_id IN $roles_id";
        $res=mysqli_query($this->connect,$sql);
        $result=mysqli_fetch_all($res);
        return $result;
    }
//    查询所有的培训记录
     public function logs(){
        $sql="select a.name,a.roles,a.city,b.video,b.watching_time from users AS a JOIN logs AS b ON a.id=b.users_id";
        $res=mysqli_query($this->connect,$sql);
        $result=mysqli_fetch_all($res);
        return $result;
     }
//    根据用户名称查询其培训记录
     public function select_log($name){
         $sql="select a.name,a.roles,a.city,b.video,b.watching_time from users AS a JOIN logs AS b ON a.id=b.users_id WHERE a.name=$name";
         $res=mysqli_query($this->connect,$sql);
         $result=mysqli_fetch_assoc($res);
         return $result;
     }
//    判断用户名和密码是否正确
     public function verify($email,$pwd){
         $sql="select * from users WHERE email=$email and password=$pwd";
         $res=mysqli_query($this->connect,$sql);
         $this->rows=mysqli_num_rows($res);
         $result=mysqli_fetch_assoc($res);
         return $result;
     }
}