<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><{$title}></title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>
        body{font-family: "Microsoft YaHei"}
    </style>
</head>
<body>
<!--header-->
<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-xs-10">
                <ul class="nav nav-pills" role="tablist">
                   <{$tabs}>
<!--                    <li><a>用户列表</a></li>-->
<!--                    <li class="active"><a>培训内容</a></li>-->
<!--                    <li><a>培训记录</a></li>-->
                </ul>
            </div>
            <div class="col-lg-2 col-md-2 col-md-2">
                <div style="line-height: 40px">
                    <span>用户名:</span>
                    <span><{$user}></span>
                    <span><a href="index.php?controller=login&action=logout">退出</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--container-->
<div class="container">