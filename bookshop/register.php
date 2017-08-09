<?php session_start()?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>注册</title>
<link rel="stylesheet" href="css/reset.css"/>
<link rel="stylesheet" href="css/register.css"/>
 <link rel="stylesheet" href="iconfont/iconfont.css"/>

</head>
<body>
<div class="wrap">
    <div class="wrap_content">
        <a class="logo" href="index.php">
            <img src="img/register/logo.png"/>
        </a>
        <div class="nav">
            欢迎光临书城网，请
            <a href="login.php">登录</a>
            <a href="register.php">免费注册</a>
        </div>
    </div>

</div>
<div class="bd">
    <div class="head">
        <a class="head_a1" href="javascript:void(0)">新用户注册</a>
        <a class=" head_a2" href="index.php"><i class="iconfont">&#xe600;</i>书城首页</a>
    </div>
    <div class="body">
        <form action="usersfunc.php?method=save" method="post" name="formUser" >
        <table>
            <tr>
                <td class="t">手机号码</td>
                <td class="z_index2">
                    <input type="text" name="uname" id="username" placeholder="请输入您的手机号"/><span class="msgUname"></span>
                    <p class="warn">&nbsp;&nbsp;手机号可用于登录、找回密码、接收订单通知等服务</p>
                </td>
            </tr>
            <tr>
                <td class="t">登录密码</td>
                <td class="z_index2">
                    <input type="password" name="pwd" id="password" /><span></span>
                    <p class="warn">&nbsp;&nbsp;长度在2~18之间，只能包含字符、数字和下划线</p>

                </td>
            </tr>
            <tr>
                <td class="t">确认密码</td>
                <td class="z_index2">
                    <input type="password" id="conpwd"/><span></span>

                </td>
            </tr>
            <tr>
                <td class="t"></td>
                <td class="">
                    <input type="checkbox" checked />我已阅读并同意<a href="javascript:void(0)">《书城交易条款》</a>
                </td>
            </tr>
            <tr>
                <td class="t"></td>
                <td class="">
                   <input type="submit" value="立即注册" id="submitReg"/>
                    <input type="hidden" name="ac" value="register"/>
                </td>
            </tr>
        </table>
        </form>

    </div>
</div>
<div class="footer">
    <p class="copyRight">Copyright (C) 华东交大杨燃 2014-2017, All Rights Reserved</p>
    <p >京ICP证041189号 &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;出版物经营许可证 新出发京批字第直0673号</p>
    <p>本人收录的免费小说作品、频道内容、书友评论、用户上传文字、图片等其他一切内容均属个人行为，与任何网站或个人无关。</p>
</div>
<div class="pic_footer">

</div>

</body>
<script src="js/jquery-1.7.2.js"></script>

<script type="text/javascript">

    $(function(){
        //设置user
        var regUser = /^1\d{10}$/;//1开头 后跟10位数字
        $('#username').blur(function(){
            var userName=$.trim($(this).val());
            if(userName==null||userName==''){
//                $(this).next().html("fkvkfs");
                this.nextSibling.innerHTML ="<font color='red'>输入的用户名不能为空！</font>";
            }
            else if(!regUser.test(userName)){
                this.nextSibling.innerHTML ="<font color='red'>输入的手机号格式不正确！</font>";
            }
            else{
                $.ajax({
                    url:"register_check.php",
                    type:"post",
                    data:"val="+userName,
                    success:function(data){
                        console.log(data);
                       $('.msgUname').html("<font color='red'>"+data+"</font>");


                    }
                })
            }
        });
    });



//    pwd.nextSibling.innerHTML="dui";
    var pending = function (id,reg) {
        var inp = document.getElementById(id);
        inp.onblur = function () {
            if(reg.test(this.value)){
                this.nextSibling.innerHTML = "&#xe612;" ;// 这个 的 下一个兄弟节点 的 内部HTML = “”
             this.nextSibling.className = "right iconfont";
            }else{
                this.nextSibling.innerHTML = "&#xe633;";
               this.nextSibling.className = "wrong iconfont";
            }
        }
    };

//    pending("username",regUser);




    //密码 长度在2~18之间，只能包含字符、数字和下划线
    var regPwd=/^\w{2,18}$/;
    pending("password",regPwd);


    //确认密码
    var conInput=document.getElementById('conpwd');
    var pwdInput=document.getElementById('password');
    conInput.onblur=function(){
        if(conInput.value==pwdInput.value && pwdInput.value ){
                this.nextSibling.innerHTML ="&#xe612;" ; // 这个 的 下一个兄弟节点 的 内部HTML = “”
            this.nextSibling.className = "right iconfont";
                return true;
        }else{
            this.nextSibling.innerHTML = "&#xe633;"; // 这个 的 下一个兄弟节点 的 内部HTML = “”
           this.nextSibling.className = "wrong iconfont";
            return false
        }
    };


</script>
</html>