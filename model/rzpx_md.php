<?php
/**
 * Created by PhpStorm.
 * User: liuciyin
 * Date: 2017/1/18
 * Time: 15:28
 */
require_once 'configs/config.php';
class Model{
    public $connect;
    public $rows;
//    连接数据库
    public function __construct()
    {
        $this->connect = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB);
        return $this->connect;
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
        $sql="select a.id,a.name,a.email,a.password,a.city,a.roles_id,(SELECT name from users WHERE id=a.created_by)AS created_by,from_unixtime(a.created_at)as created_at,b.role from users AS a JOIN roles AS b ON a.roles_id=b.id";
        $res=mysqli_query($this->connect,$sql);
        $result=mysqli_fetch_all($res,MYSQLI_ASSOC);
        $this->rows=mysqli_num_rows($res);
        return $result;
    }
//    根据姓名查询用户信息：一维关联数组
    public function search_user($name){
        $sql="select a.id,a.name,a.email,a.password,a.city,a.roles_id,(SELECT name from users WHERE id=a.created_by)AS created_by,from_unixtime(a.created_at)as created_at,b.role from users AS a JOIN roles AS b ON a.roles_id=b.id WHERE a.name='$name'";
        $res=mysqli_query($this->connect,$sql);
        $result=mysqli_fetch_all($res,MYSQLI_ASSOC);
        $this->rows=mysqli_num_rows($res);
        return $result;
    }

//    根据用户角色显示相应的培训内容：二维索引+关联数组。
    public function show_project($roles_id){
        $sql="select a.role,b.project from roles AS a JOIN projects AS b ON a.id=b.roles_id WHERE b.roles_id='$roles_id'";
        $res=mysqli_query($this->connect,$sql);
        $result=mysqli_fetch_assoc($res);
        return $result;
    }
//    显示所有的培训内容
    public function show_projects(){
        $sql = "SELECT a.id,a.role,b.project FROM roles AS a JOIN projects AS b ON a.id=b.roles_id";
        $res = mysqli_query($this->connect, $sql);
        $result = mysqli_fetch_all($res,MYSQLI_ASSOC);
        return $result;
    }
//    查询所有的培训记录s
     public function logs(){
        $sql="select a.name,a.roles_id,a.city,b.id,b.video,from_unixtime(b.watching_time) as watching_time,c.role from users AS a JOIN logs AS b ON a.id=b.users_id JOIN roles AS c ON c.id=a.roles_id ORDER BY b.watching_time DESC ";
        $res=mysqli_query($this->connect,$sql);
        $result=mysqli_fetch_all($res,MYSQLI_ASSOC);
        return $result;
     }
//    根据用户名称查询其培训记录
     public function select_log($name){
         $sql="select a.name,a.roles,a.city,b.video,from_unixtime(b.watching_time) as watching_time from users AS a JOIN logs AS b ON a.id=b.users_id WHERE a.name='$name'";
         $res=mysqli_query($this->connect,$sql);
         $result=mysqli_fetch_all($res,MYSQLI_ASSOC);
         return $result;
     }
//    判断用户名和密码是否正确
     public function verify($username,$pwd){
         $sql="select * from users WHERE name='$username' and password='$pwd'";
         $res=mysqli_query($this->connect,$sql);
         $this->rows=mysqli_num_rows($res);
         $result=mysqli_fetch_assoc($res);
         return $result;
     }
}