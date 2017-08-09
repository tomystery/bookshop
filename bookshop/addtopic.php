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
        .commentsList{
            border: 1px solid #ccc;
            background: #f7f7f7;
            padding: 10px;
        }
        td{
            font-size: 12px;
        }
        textarea{
            outline: 0;
        }
        .comment{
            float:right;
            margin-right:10px;
            display:block;
        }
        /*center_wrap结束*/
   </style>
</head>
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
        <li><a href="#">新闻公告</a></li>
    </ul>
</div>
<div class="center_wrap clearfix">
    <div class="user_here">
        当前位置：首页>用户中心
    </div>
    <?php
    $id = $_REQUEST["id"];
    $str="select * from details where id = '$id' ";
    $result = check($str);
    $rs = mysql_fetch_object($result);
    $goodsid = $rs->goodsid;
    ?>
        <div class="box">
                <div class="commentsList">
                    <form action="topicfunc.php?method=save" method="post" name="commentForm" id="commentForm">
                        <table width="710" border="0" cellspacing="5" cellpadding="0">
                            <tr>
                                <td width="64" align="right">用户名：</td>
                                <td width="631"><?php if(!empty($_SESSION["realname"])){ ?> <?php echo $_SESSION["realname"] ?>
                                    <?php }else{ ?></td>
                                <?php
                                echo"<script type='application/javascript'> alert('请先到用户中心填写用户信息');location.href='listorders.php' </script>";
                                } ?>
                            </tr>
                            <tr>
                                <td align="right">评价等级：</td>
                                <td>
                                    <input name="num" type="radio" value="1" id="comment_rank1" /> <img src="img/images/stars1.gif" />
                                    <input name="num" type="radio" value="2" id="comment_rank2" /> <img src="img/images/stars2.gif" />
                                    <input name="num" type="radio" value="3" id="comment_rank3" /> <img src="img/images/stars3.gif" />
                                    <input name="num" type="radio" value="4" id="comment_rank4" /> <img src="img/images/stars4.gif" />
                                    <input name="num" type="radio" value="5" checked="checked" id="comment_rank5" /><img src="img/images/stars5.gif" />
                                </td>
                            </tr>
                            <tr>
                                <td align="right" valign="top">评论内容：</td>
                                <td>
                                    <textarea name="contents" class="inputBorder" style="height: 100px; width: 620px;"></textarea>
                                    <input type="hidden" name="goodsid" value="<?php echo $goodsid ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><?php if(!empty($_SESSION["realname"])){ ?>
                                        <input type="hidden" name="usersid" value="<?php echo $_SESSION["userid"] ?>" />
                                        <input type="submit" value="评论" class="comment"  /> <?php } ?>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
        </div>
</div>

<div class="footer_bar"></div>
<?php include "footer.php" ?>
</body>