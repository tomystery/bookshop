<?php
session_start();
include "func.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>用户中心</title>
    <!--<link rel="stylesheet" href="css/reset.css"/>-->
    <style type="text/css">
        *{
            padding:0;
            margin:0;
            list-style: none;
            text-decoration: none;
        }
        .clearfix:after{
            display:block;
            clear: both;
            content:"";
        }
        .clear{
            overflow: hidden;
        }
        body{
            background-color: white;
        }
        .header{

            width:1003px;
            margin:0 auto;
        }
        .header_r{
            padding-top:20px;
            float:right;
        }
        .header_r>ul>li{
            float:left;
        }
        .header_r>ul>li>a{
            color:#333333;
            font-size: 14px;
        }
        #uName>a{
            color:red;
        }
        .logo{
            padding-top:40px;
            padding-bottom:20px;
        }
        .nav{
            background-color:#1f4f91;

        }
        .nav>ul{
            width:1003px;
            margin:0 auto;
        }
        .nav>ul>li{
            float:left;
        }
        .nav>ul>li>a{
            line-height:35px;
            text-align: center;
            width:120px;
            height:35px;
            display:block;
            font-size: 16px;
            color:white;
        }
        /*center_wrap开始*/
        .center_wrap{
            width:1003px;
            margin:0 auto;
        }
        .user_here{
            height:55px;
            line-height:55px;
        }
        .areaL{
            float:left;
            width:178px;
            border:1px solid #dddddd;

        }
        .areaL>ul{
            border: 4px solid #f8f8f8;
        }
        .areaL>ul>li{
            margin-bottom:3px;
            background:url("img/images/menuBg.gif") no-repeat -13px -30px;
        }
        .areaL>ul>.cus{
            background:url("img/images/menuBg.gif") no-repeat -13px 0px;
        }
        .areaL>ul>li>a{
            width:155px;
            height:25px;
            display:block;
            padding-left: 3px;
            margin-left:10px;
            margin-bottom:3px;
            font-weight:700;
            color:black;
        }
        .areaL>ul>li>a>img{
            margin-right:3px;
        }
        .areaL>ul>.li_last>a>img{
            margin-right:3px;
            float:right;
        }
        /*areaR开始*/
        .areaR{
            width: 802px;
            float: right;
            border: 1px solid #ddd;
        }
        .R_box{
            border: 4px solid #f8f8f8;
        }
        .font1{
            color:#1f4f91;
        }

        .footer_bar{
            height:32px;
            background-color: #1f4f91;
        }
        td{
            height:26px;
            line-height:26px;
            font-size: 12px;
            color:#666666;
        }
        .table_p{
            background-color: #f6f6f6;
            font-weight: 700;
            margin:0 10px 10px  10px;

            color:#2867bd;
        }
        td>a{
            color:#666666;
        }

        /*新闻公告*/
        .f6{
            color:black;
            font-weight: 700;
        }
        table>tr :not(:first-child){
            background-color:yellow ;
        }

        /*center_wrap结束*/
    </style>
</head>
<script src="js/jquery-1.7.2.js"></script>
<body>
<div class="header">
    <div class="header_r ">
        <ul class="ECS_MEMBERZONE clearfix" >
            <?php
            if(empty($_SESSION["userid"])){
                ?>
                <li class="Login"><a href="login.php">登录</a></li>
                <li class="Registration">&nbsp;&nbsp;|&nbsp;&nbsp;<a href="register.php">注册</a></li>
            <?php }else{ ?>
                <li id="uName"><a href="javascript:void(0)"><?php echo $_SESSION["username"] ?></a></li>
                <li class="Registration">&nbsp;&nbsp;|&nbsp;&nbsp;<a href="shoppingcar.php">购物车</a></li>
                <li class="Registration">&nbsp;&nbsp;|&nbsp;&nbsp;<a href="exit.php">退出</a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="logo">
        <img src="img/main/logo.png"/>
    </div>
</div>
<div class="nav">
    <ul class="clearfix">
        <li><a href="index.php">首页</a></li>
        <li><a class="article" href="javascript:void(0)">新闻公告</a></li>
    </ul>
</div>
<div class="center_wrap clearfix">
    <div class="user_here">
        当前位置：首页>用户中心
    </div>
    <div class="areaL">
        <ul>
            <li>
                <a class="welcome" href="javascript:void(0)" class="userCenter">
                    <img src="img/images/u1.gif"/>欢迎页
                </a>
            </li>
            <li>
                <a class="editPwd" href="javascript:void(0)">
                    <img src="img/images/u13.gif"/>修改密码
                </a>
            </li>
            <li>
                <a class="userInfo" href="javascript:void(0)">
                    <img src="img/images/u2.gif"/>用户信息
                </a>
            </li>

            <script type="application/javascript">
                //article 新闻公告
                $('.article').click(function(){
                    $.ajax({
                        url:"article.php",
                        type:"post",
                        data:"",
                        success:function(data){
                            $('.R_box').html(data)

                        }

                    })
                });
            </script>