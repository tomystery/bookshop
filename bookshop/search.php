<?php
session_start();
include "func.php";
$keywords = $_GET['keywords'];

?>
<!DOCTYPE html>
<head lang="en">
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="css/search.css"/>
    <link rel="stylesheet" href="iconfont/iconfont.css"/>
    <script type="text/javascript" src="js/jquery-1.7.2.js"></script>
</head>

<!--头部-->
<!--头部相同的部分开始-->
<!--头部-->
<div id="hd">
    <div class="hd_wrap">
        <?php
        if(isset($_SESSION['username'])){
            $username=$_SESSION['username'];
            $userid=$_SESSION["userid"];
            ?>
            <div class="hi">hi,
                <a href="index.php">
                    <b><?php echo $username ?></b>
                </a>
                <a name="logOut" href="exit.php" class="out" target="_self">[退出]</a>

            </div>
        <?php } else {?>
            <div class="hd_welcome">
            <span id="nickname">欢迎光临书城，请
              <a href="login.php" target="_blank">登录</a>成为会员
            </span>
            </div>
        <?php } ?>
    </div>
</div>
<!--二级导航开始-->
<div class="logo_wrap">
    <div class="logo">
        <img src="img/main/logo.png">
        <div class="search">
            <input type="text" class="searchText" placeholder="作品、作者、出版社"/>
            <a type="button" value="提交"  class="searchBtn"></a>
        </div>
        <?php
        $str="select * from cart where usersid=$userid";
        $result= mysql_query($str);
        $num=0;

        while($rs=mysql_fetch_assoc($result)){
            $num=$num+$rs['num'];
        }
        ?>

        <ul>
            <li><a href="shoppingcar.php" class="car "><i class="iconfont">&#xe632;</i>购物车
                    <b class="car_count"> <?php echo $num ?></b></a></li>


            <li><a href="javascript:void(0)" class="myOrder"><i class="iconfont">&#xe61a;</i>我的订单</a></li>
            <li><a href="javascript:void(0)" class="myCenter "><i class="iconfont">&#xe603;</i>用户中心</a></li>
        </ul>
    </div>
</div>
<!--三级导航开始-->
<div class="nav_wrap">
    <div class="nav"></div>
</div>

<div class="center">

    <div class="classification_list clearfix">
        <?php

        $str="select * from goods where name like '%" .$keywords."%' or author like '%\" .$keywords.\"%'  order by id desc  ";
        $result = mysql_query($str);
        $totalNum=mysql_num_rows($result);
        ?>

    <!--左边内容开始-->
        <div class="right clearfix">
        <p class="p_num">共有<?php echo $totalNum ?>条关于 <b><?php echo $keywords  ?></b> 相关记录</p>
            <img src="img/images/search_nav.png"/>

            <?php
            if($totalNum){
            ?>
            <div class="book_list clearfix">
                <?php
                while($rs = mysql_fetch_object($result)) {
                    ?>
                    <!--第一本书开始-->
                    <a class="clearfix" href="detail.php?id=<?php echo $rs->id ?>" >
                        <span class="bookCover">
                            <img src="<?php echo $rs->image2 ?>"/>
                        </span>

                        <div class="bookInfo">
                            <div class="title"><?php echo $rs->name ?></div>
                            <div class="author"><?php echo $rs->author ?></div>
                            <div class="starts"></div>
                            <div class="price"><span class="now">￥<?php echo $rs->nowprice ?></span> </div>
                            <div class="desc">
                                <?php echo $rs->contents ?>
                            </div>
                        </div>
                    </a>

                    <?php } ?>
            </div>
            <?php }else{ ?>
                <div class="add_more_end">亲，没有更多内容了</div>
            <?php } ?>




    </div>
    <!--左边内容结束-->
        <div class="left">
            <img src="img/images/all_search.png"/>
        </div>
    </div>
</div>



<!--三级导航结束-->
<div class="publish_footer">
    <div class="inner clearfix">
        <ul>
            <li class="focusOn">
                <div class="left">
                    <img src="img/main/footer_share.jpg"/>
                </div>
                <div class="right">
                    <p class="title">关注我们</p>
                    <p class="desc">最受欢迎的阅读产品</p>
                    <p class="subtitle">关注我们:</p>
                    <ul class="shareLink">
                        <li id="footWeiBoShare">
                            <a href="http://weibo.com/dangdangread" target="_blank">
                                <i class="icon weibo"></i>
                                <span>新浪微博</span>
                            </a>
                        </li>
                        <li id="footWeixinShare">
                            <i class="icon weixin"></i>
                            <span>官方微信</span>
                            <img class="pWeixin" src="img/main/weixin.png"/>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="focusOn">
                <div class="left">
                    <img src="img/main/footer_author.jpg"/>
                </div>
                <div class="right">
                    <p class="title">作者后台</p>
                    <p class="desc">加入书城原创网</p>
                    <p class="subtitle">福利，成就网文大神</p>
                    <ul class="joinUs">

                    </ul>
                </div>
            </li>
            <li class="focusOn">
                <div class="left">
                    <img src="img/main/footer_us.jpg"/>
                </div>
                <div class="right">
                    <p class="title">关于我们</p>
                    <p class="desc">欢迎反馈宝贵意见</p>
                    <p class="subtitle">书城书吧：读书5.0问答</p>
                    <ul class="contactUs">

                    </ul>
                </div>
            </li>
        </ul>
    </div>

</div>

<!--public Footer结束-->
<div class="footer">
    <p class="copyRight">Copyright (C) 华东交大杨燃 2014-2017, All Rights Reserved</p>
    <p >京ICP证041189号 &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;出版物经营许可证 新出发京批字第直0673号</p>
    <p>本人收录的免费小说作品、频道内容、书友评论、用户上传文字、图片等其他一切内容均属个人行为，与任何网站或个人无关。</p>
</div>
<script src="js/jquery-1.7.2.js"></script>
<script type="application/javascript">
    (function(){
        //点击searchBtn
        $('.searchBtn').click(function(){
            var keywords= $.trim($('.searchText').val());
            if(keywords){
                console.log(keywords);
                location.href="search.php?keywords="+keywords+"";

            }
        });

        //点击myOrder
        $('.myOrder').click(function(){
            $.ajax({
                url:"cartfunc.php",
                type:"post",
                data:"method=myorder",
                success:function(data){
                    console.log(data);
                    var arr=data.split('&');
                    if(arr[1]){
                        if(confirm(arr[1])){return location.href=arr[0];}return false;
                    }else{
                        location.href=arr[0];
                    }


                }
            })
        });
        //mycenter
        $('.myCenter').click(function(){
            $.ajax({
                url:"cartfunc.php",
                type:"post",
                data:"method=usercenter",
                success:function(data){
                    console.log(data);
                    var arr=data.split('&');
                    if(arr[1]){
                        if(confirm(arr[1])){return location.href=arr[0];}return false;
                    }else{
                        location.href=arr[0];
                    }


                }
            })
        });

    })();

</script>
</body>
</html>