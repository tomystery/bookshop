<?php
 session_start();
include  "func.php";
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/reset.css"/>
    <style>
        /*头部head开始*/
        .head{
            width:1200px;
            height:60px;
            margin:12px auto 14px;
        }
        /*头部head结束*/

        .login_bg{
            background: url("img/login/bg.png") no-repeat;
            width:1349px;
            height:590px;
        }
        .wrap{
            position:relative;
            width:320px;
            height:380px;
            padding:15px 25px 15px 15px;
            background: #fff;
            border:1px solid #eef2f4;
            box-shadow: 0px 1px 2px #eee;
            margin:90px 75px 0 0;
            float:right;
        }
        .wrap_top{
            position:absolute;
            top:-27px;
            left:-1px;
            width:338px;
            height:24px;
            padding-left:22px;
            border:1px solid #fedbd1;
            background: url("img/login/wrap_top.png") no-repeat;
        }
        .wrap_top div{
            width:338px;
            height:24px;
            font-size:12px;
            line-height:24px;
            color:#828282;
        }
        .loginCoreWrap{
            width:311px;
            height:380px;
            float:right;

        }
        .userName,.password{
            width:310px;
            height:36px;
            border:1px solid #e6e6e6;
            margin-top:32px;
        }
        .userName span{
            width:30px;
            height:36px;
            display:block;
            float:left;
            background:url("img/login/icon.png") no-repeat;
        }
        .password span{
            width:30px;
            height:36px;
            display:block;
            float:left;
            background:url("img/login/icon.png") no-repeat 2px -38px;
        }
        .userName input,.password input{
            width:270px;
            height:34px;
            display:block;
            float:right;
            color:#333;
            border:0;
            outline: none;
        }
        .auto_login{
            width:310px;
            height:27px;
            padding-top:7px;
            margin-top:20px;
        }
        .safe{
            font-size: 12px;
            color:#6e6e6e;
        }
        .btn{
            border-radius: 5px;
        }
        .btn>input{
            display:block;
            width:311px;
            height:44px;
            color:white;
            font-size: 20px;
            line-height:44px;
            text-align: center;
            background-color: #ff2832;
            border-radius: 5px;
            border:none;
            outline: none;
        }
        .btn>input:hover{
            background-color:#f01923;
        }
        .register{
            padding-top:10px;
        }
        .register span{
            font-size: 12px;
            color:#6e6e6e;
        }
        .re_right{
            float:right;
        }
        /*合作伙伴开始*/
        .partner{
            padding-top: 10px;
        }
        .partner dl dt{
            float:left;
            margin-right:5px;

        }
        .partner dl a{
            display:block;
            width:20px;
            height:20px;
        }
        .qq{background: url("img/login/partner.png") no-repeat 0px 0px;}
        .weixin{background: url("img/login/partner.png") no-repeat -20px 0px;}
        .weibo{background: url("img/login/partner.png") no-repeat -40px 0px;}
        .alipay{background: url("img/login/partner.png") no-repeat -63px 0px;}

        /*合作伙伴结束*/

        /*最后的一部分footer*/
        .footer{
            width:1200px;
            height:78px;
            padding:15px 0 40px 0;
            margin:0 auto;
            border-top:1px solid #ebebeb;

        }
        .footer p{
            text-align: center;
            color:#666;
            height:26px;
            line-height:26px;
            font-size:12px;
        }
        /*最后的一部分footer结束*/
        /*pic_footer开始*/

        .pic_footer{
            width:590px;
            height:130px;
            margin:0 auto;
            background: url("img/login/footer.png")no-repeat center;
        }
        /*pic_footer结束*/


    </style>
</head>
<body>
<!--头部开始-->
<div class="head">
    <a href="index.php">
        <img src="img/login/logo.png"/>
    </a>
</div>
<!--头部结束-->

<!--背景大图片开始-->
<div class="login_bg">
    <div class="wrap clearfix">
        <div class="wrap_top">
            <div>请勿设置与邮箱及其他网站相同的登录及支付密码，谨防诈骗!</div>
        </div>
        <div class="loginCoreWrap">
            <form action="usersfunc.php?method=login" method="post" >
            <div class="userName">
                <span></span>
                <input type="text"  name="uname" class="user" placeholder="手机号码"/>
            </div>
            <div class="password">
                <span></span>
                <input type="password" name="pwd" class="pwd" placeholder="密码"/>
            </div>
            <div class="auto_login">
                <input type="checkbox" checked/>
                <span class="safe">请勿在公共场合勾选此选项</span>
            </div>
            <p class="btn">
                <input type="submit" value="登 &nbsp;录"/>
                <input type="hidden" name="ac" value="login"/>
            </p>
            </form>
            <p class="register">
                <span>使用合作网站登录</span>
                <span class="re_right">
                    <a href="register.php">立即注册</a>
                </span>
            </p>
            <div class="partner">
                <dl>
                    <dt><a class="qq" href="javascript:void(0)"></a></dt>
                    <dt><a class="weixin" href="javascript:void(0)"></a></dt>
                    <dt><a class="weibo" href="javascript:void(0)"></a></dt>
                    <dt><a class="alipay" href="javascript:void(0)"></a></dt>
                </dl>
            </div>
        </div>
    </div>
</div>
<!--背景大图片结束-->
<div class="footer">
    <p class="copyRight">Copyright (C) 华东交大杨燃 2014-2017, All Rights Reserved</p>
    <p >京ICP证041189号 &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;出版物经营许可证 新出发京批字第直0673号</p>
    <p>本人收录的免费小说作品、频道内容、书友评论、用户上传文字、图片等其他一切内容均属个人行为，与任何网站或个人无关。</p>
</div>
<div class="pic_footer">

</div>

</body>
</html>