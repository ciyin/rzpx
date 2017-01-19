<?php
/**
 * Created by PhpStorm.
 * User: liuciyin
 * Date: 2017/1/18
 * Time: 14:32
 */
$connect=mysqli_connect('localhost','root','','rzpx');
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
