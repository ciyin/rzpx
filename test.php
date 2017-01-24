<?php
/**
 * Created by PhpStorm.
 * User: 赐音
 * Date: 2017/1/23
 * Time: 14:16
 */
include 'libs/Smarty.class.php';
$a=new Smarty();
$a->display('templates/header.php');
$a->display('templates/users_list_1.php');
$a->display('templates/footer.php');