<?php
/**
 * Created by PhpStorm.
 * User: liuciyin
 * Date: 2017/1/18
 * Time: 14:32
 */
$connect=mysqli_connect('localhost','root','root','rzpx');
$users="CREATE TABLE IF NOT EXISTS users(
id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
name VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
city VARCHAR(255) NOT NULL,
roles_id INT NOT NULL,
created_at INT NOT NULL,
created_by INT NOT NULL
)ENGINE=InnoDB CHARSET=UTF8";
mysqli_query($connect,$users);

$roles="CREATE TABLE IF NOT EXISTS roles(
id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
role VARCHAR(255) NOT NULL 
)ENGINE=InnoDB CHARSET=UTF8";
mysqli_query($connect,$roles);

$projects="CREATE TABLE IF NOT EXISTS projects(
id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
roles_id INT NOT NULL,
project VARCHAR(255) NOT NULL
)ENGINE=InnoDB CHARSET=UTF8";
mysqli_query($connect,$projects);

$logs="CREATE TABLE IF NOT EXISTS logs(
id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
users_id INT NOT NULL,
video VARCHAR(255) NOT NULL,
watching_time INT NOT NULL 
)ENGINE=InnoDB CHARSET=UTF8";
mysqli_query($connect,$logs);

$sql="insert into roles(id,role)VALUE ('1','督导'),('2','cr'),('3','前台'),('4','教务'),('5','财务'),('6','顾问'),('7','副校长'),('8','兼职督导'),('9','管理员')";
mysqli_query($connect,$sql);

$sql_2="insert into projects(id,roles_id,project)VALUE ('1','1','留学酷/CRM/1course'),('2','2','留学酷/CRM/1course'),('3','3','CRM'),('4','4','CRM'),('5','5','CRM'),('6','6','留学酷/CRM/1course'),('7','7','留学酷/CRM/1course'),('8','8','留学酷')";
mysqli_query($connect,$sql_2);

$sql_3="insert into users(id,name,email,password,city,roles_id,created_at,created_by)VALUE ('1','刘丹霞','123@11.com','1234','上海','9','2014099033','1')";
mysqli_query($connect,$sql_3);
