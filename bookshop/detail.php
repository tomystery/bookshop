<?php session_start()?>
<?php
include "func.php";
$id = $_REQUEST["id"];
/*$str = "select  a.* , b.catename  from goods a ,";
$str .=" cate b  where a.cateid = b.id and a.id = '$id'";*/
$str="select * from goods where id=$id";
$result = mysql_query($str);
$rs = mysql_fetch_object($result);


?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>商品详情</title>
    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="iconfont/iconfont.css"/>
    <link rel="stylesheet" href="css/detail.css"/>
</head>
<body>
<!--头部-->
<div id="hd">
    <div id="tools">
        <div class="tools clearfix">

           <!-- <ul>
                <li>
                    <a  href="#" target="_blank">书屋自出版</a>
                </li>
                <li class="phoneShop">
                    <a  class="iconfont" href="#">&#xe606;手机书城</a>
                </li>
                <li class="myBookShop">
                    <a href="#">我的书城</a>
                    <img src="img/main/1.png"/>

                </li>

                <li class="myService">
                    <a href="#">客户服务</a>
                    <img src="img/main/1.png"/>
                </li>
            </ul>-->
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

<!--2.动图开始-->
    <div class="gif clearfix">
        <img src="img/detail/kaixueji.gif"/>
        <div class="search clearfix">
            <input type="text"/>
            <a class="iconfont">&#xe607;</a>
        </div>
        <div class="order">
            <a class="myOrder"  href="javascript:void(0)">我的订单</a>
        </div>
        <?php
        $str="select * from cart where usersid=$userid";
        $str1= mysql_query($str);
        $num=0;

        while($str2=mysql_fetch_assoc($str1)){
            $num=$num+$str2['num'];
        }
        ?>
        <div class="cart">
            <a  href="shoppingcar.php"><i  class="iconfont">&#xe66d;</i>购物车<span>&nbsp;<?php echo $num ?></span></a>
        </div>
    </div>
<!--2.动图结束-->
</div>
<!--头部结束-->
<!--主要内容开始-->
<div class="container clearfix">
    <div class="abox">
        <h3>看过本商品的还看过</h3>
        <ul class="list">
            <li>
                <a href="javascript:void(0)" class="pic54">
                    <img src="img/detail/seen/seen1.jpg"/>
                </a>
                <a class="name">人间失格</a>
                <span class="d_price">¥12.99</span>
            </li>
            <li>
                <a href="javascript:void(0)" class="pic54">
                    <img src="img/detail/seen/seen2.jpg"/>
                </a>
                <a class="name" href="javascript:void(0)">将来的你一定会感谢现在拼命的你</a>
                <span class="d_price">¥10.00</span>
            </li>
            <li>
                <a href="javascript:void(0)" class="pic54">
                    <img src="img/detail/seen/seen3.jpg"/>
                </a>
                <a class="name" href="javascript:void(0)">这么慢，那么美</a>
                <span class="d_price">¥15.00</span>
            </li>
            <li>
                <a href="javascript:void(0)" class="pic54">
                    <img src="img/detail/seen/seen4.jpg"/>
                </a>
                <a class="name" href="javascript:void(0)">圣女的救济</a>
                <span class="d_price">¥22.00</span>
            </li>
            <li>
                <a href="javascript:void(0)" class="pic54">
                    <img src="img/detail/seen/seen5.jpg"/>
                </a>
                <a class="name" href="javascript:void(0)">长大后的世界</a>
                <span class="d_price">¥17.90</span>
            </li>
            <li>
                <a href="javascript:void(0)" class="pic54">
                    <img src="img/detail/seen/seen6.jpg"/>
                </a>
                <a class="name" href="javascript:void(0)">摆渡人</a>
                <span class="d_price">¥22.00</span>
            </li>
            <li>
                <a href="javascript:void(0)" class="pic54">
                    <img src="img/detail/seen/seen7.jpg"/>
                </a>
                <a class="name" href="javascript:void(0)">偷影子的人</a>
                <span class="d_price">¥27.00</span>
            </li>
        </ul>
    </div>
    <!--右侧主区begin-->


        <div class="bbox">
            <div class="right_box">

            <h1>
                <img src="img/detail/e_book.png"/>
                <?php echo $rs->name ?>
            </h1>
            <div class="show clearfix">
                <div class="show_pic">
                    <div class="big">
                        <a href="#">
                            <img src="<?php echo $rs->image2 ?>"/>
                        </a>
                    </div>
                    <div class="dp_slide">
                        <img src="<?php echo $rs->image2 ?>"/>

                    </div>
                    <div class="share">
                        分享到:
                        <span class="iconfont "><a class="share1" href="#">&#xe7dc;</a></span>
                       <span class="iconfont "><a class="share2"href="#">&#xe64f;</a></span>
                       <span class="iconfont "><a class="share3" href="#">&#xe691;</a></span>
                        <span class="iconfont "><a  class="share4" href="#">&#xe646;</a></span>
                    </div>

                </div>
                <div class="show_info">
                    <form action="" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY">
                        <p class="item_id">商品编号:&nbsp;<i><?php echo $rs->id ?></i></p>
                        <div class="sale">
                            <p>当&nbsp;当&nbsp;价:&nbsp;
                                <b id="b_price">
                                    <span class="yen">¥</span>
                                    <?php echo $rs->nowprice ?>
                                </b>
        <!--                        <span class="paper_price">纸质书价：<i>¥27.30</i></span>-->
                            </p>
                            <p><span class="price">定&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;价：</span><span class="m_price">¥<?php echo $rs->marketprice ?></span><span class="gray">（为您节省¥<?php echo $rs->marketprice-$rs->nowprice  ?>）</span></p>

                        </div>
                        <ul class="clearfix">
                            <li><span class="ws2">作者：</span>（日）<a href="javascript:void(0)"><?php echo $rs->author ?></a></li>
                            <li><span >出版社：</span>（日）<a href="javascript:void(0)"><?php echo $rs->press ?></a></li>
                            <li class="clearfix">
                                <span class="c1">出版时间：<?php echo $rs->publishtime ?></span>
                                <span  class="c2">
                                    <span>版次:</span>
                                    1
                                </span>
                                 <span  class="c3">
                                    <span>页数:</span>
                                    297
                                </span>
                            </li>
                            <li>
                                <span class="c4">
                                    <span >字数：</span>
                                    149386
                                </span>
                                <span class="c5">
                                    <span >ISBN</span>
                                    9787544</span>
                            </li>
                        </ul>
                        <div class="media clearfix">
                            <span>支持设备：</span>
                            <ul class="clearfix">
                                <li >
                                    <a class="iconfont" href="http://itunes.apple.com/us/app/dang-dang-du-shuhd/id488116777?ls=1&mt=8"><i>&#xe656;</i>
                                        <br>ipad
                                    </a>
                                </li>
                                <li >
                                    <a class="iconfont" href="http://e.dangdang.com/ebook/read.do?productId=1900547653"><i>&#xe601;</i>
                                        <br>pc在线
                                    </a>
                                </li>
                                <li >
                                    <a class="iconfont" href="http://e.dangdang.com/block_html5.htm"><i>&#xe625;</i>
                                        <br>触屏版
                                    </a>
                                </li>
                                <li >
                                    <a class="iconfont" href="http://e.dangdang.com/block_downloadAndroid.htm"><i>&#xe604;</i>
                                        <br>Android
                                    </a>
                                </li>
                                <li >
                                    <a class="iconfont" href="https://itunes.apple.com/us/app/dang-dang-du-shuiphone-ban/id488202082?ls=1&mt=8"><i>&#xe673;</i>
                                        <br>iphone
                                    </a>
                                </li>


                            </ul>

                        </div>
                        <!--buy_area start-->
                        <div class="buy_area">
                            <div>
                                <label >我要买</label>
                                <input  name="num"  id="num" value="1" class="text" type="text"/>件
                                <input type="hidden" name="goodsid" value="<?php echo $rs->id ?> " />
                                <input type="hidden" name="price" value="<?php echo $rs->nowprice ?> " />
                            </div>
                            <div class="btn_p clearfix">
                                <a href="javascript:void(0)" class="btn_yjgm"></a>
                                <a href="javascript:void(0)" class="btn_car"></a>
                                <a href="javascript:void(0)" class="btn_zzs"></a>
                                <a href="javascript:void(0)" class="btn_sc"></a>

                            </div>

                        </div>
                    <!--buy_area end-->
                    </form>
                </div>
            </div>
    <!--        评论区和详情区 star-->
            <div style="height:38px;border-bottom: 1px solid #fc6a15;">
                <a href="javascript:void(0)" class="tab_detail tab_btn on ">商品详情</a>
                <a href="javascript:void(0)" class="tab_comment tab_btn">商品评论</a>
            </div>
            <div class="section">
                <img src="img/detail/tab.png"/>
            </div>
            <div class="section">
                <div class="tit ">内容推荐</div>

                    <div class="description">
                        <?php echo $rs->contents ?>
                    </div>
            </div>
        </div>
            <div class="comment">
                <div class="tit ">商品评论</div>

                <div class="comment_head">
                    <ul class="comments">
                        <?php
                        $sql1="select  a.* , b.uname   from topic a ,users b where a.usersid = b.id and a.goodsid = '$id'";
                        $result1 = check($sql1);
                        while($rs1 = mysql_fetch_object($result1)){
                            ?>
                            <li class="word">
                                <span class="f2"><?php echo $rs1->uname ?> </span>
                                <span class="f3">(<?php echo $rs1->addtime ?>)</span>
                                <br />
                                <img src="img/images/stars<?php echo $rs1->num ?>.gif" alt="" />
                                <p>
                                    <?php echo $rs1->contents ?>
                                </p>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
     </div>



<!--        评论区和详情区 end-->

    <!--右侧主区end-->

</div>

<!--主要内容结束-->
<div class="footer">
    <div class="footer_pic_new">
        <div class="footer_pic_new_inner">
            <a class="a1" href="javascript:void(0)"></a>
            <a class="a2" href="javascript:void(0)"></a>
            <a class="a3" href="javascript:void(0)"></a>
            <a class="a4" href="javascript:void(0)"></a>
        </div>
    </div>
    <div class="footer_public_new clearfix">
        <div class="footer_sort">
            <span class="f_title">购物指南</span>
            <ul>
                <li><a href="javascript:void(0)">购物流程</a></li>
                <li><a href="javascript:void(0)">发票制度</a></li>
                <li><a href="javascript:void(0)">账户管理</a></li>
                <li><a href="javascript:void(0)">会员优惠</a></li>
            </ul>
        </div>
        <div class="footer_sort">
            <span class="f_title">支付方式</span>
            <ul>
                <li><a href="javascript:void(0)">货到付款</a></li>
                <li><a href="javascript:void(0)">网上支付</a></li>
                <li><a href="javascript:void(0)">礼品卡支付</a></li>
                <li><a href="javascript:void(0)">银行转账</a></li>
            </ul>
        </div>
        <div class="footer_sort">
            <span class="f_title">订单服务</span>
            <ul>
                <li><a href="javascript:void(0)">订单配送查询</a></li>
                <li><a href="javascript:void(0)">订单状态说明</a></li>
                <li><a href="javascript:void(0)">自助取消订单</a></li>
                <li><a href="javascript:void(0)">自助修改订单</a></li>
            </ul>
        </div>
        <div class="footer_sort">
            <span class="f_title">配送方式</span>
            <ul>
                <li><a href="javascript:void(0)">配送范围及免邮标准</a></li>
                <li><a href="javascript:void(0)">当日递/次日达</a></li>
                <li><a href="javascript:void(0)">订单自提</a></li>
                <li><a href="javascript:void(0)">验货与签收</a></li>
            </ul>
        </div>
        <div class="footer_sort">
            <span class="f_title">退换货</span>
            <ul>
                <li><a href="javascript:void(0)">退换货政策</a></li>
                <li><a href="javascript:void(0)">自助申请退换货</a></li>
                <li><a href="javascript:void(0)">退换货进度查询</a></li>
                <li><a href="javascript:void(0)">退款方式和时间</a></li>
            </ul>
        </div>
        <div class="footer_sort">
            <span class="f_title">商家服务</span>
            <ul>
                <li><a href="javascript:void(0)">商家中心</a></li>
                <li><a href="javascript:void(0)">运营服务</a></li>
                <li><a href="javascript:void(0)">加入尾品汇</a></li>
            </ul>
        </div>
    </div >
    <!--footer_nav_box start-->

    <div class="footer_nav_box">
        <div class="footer_nav">
            <a>公司简介</a>
            <span class="sep">|</span>
            <a>Investor Relations</a>
            <span class="sep">|</span>
            <a>诚聘英才</a>
            <span class="sep">|</span>
            <a>网站联盟</a>
            <span class="sep">|</span>
            <a>当当招商</a>
            <span class="sep">|</span>
            <a>机构销售</a>
            <span class="sep">|</span>
            <a>手机当当</a>
            <span class="sep">|</span>
            <a>官方blog</a>
            <span class="sep">|</span>
            <a>热词搜索</a>
        </div>
        <div class="footer_copyright">
            <span>Copyright (C) 华东交大杨燃 2004-2017, All Rights Reserved</span>
            <img src="img/detail/validate.gif"/>
            <span>作品为个人设计 与任何网站和个人无关 软件学院 软件+交通运输</span>
            <a class="admin" href="admin/">管理员登录</a>
        </div>
    </div>
    <!--footer_nav_box end-->

</div>
<?php ?>

</body>
<script src="js/jquery-1.7.2.js"></script>
<script>

    (function(){
        console.log($('.big>a>img').attr("src"));

        $('.btn_car').click(function () {
            if (!$('#num').val()) {
                alert("请输入需要购买的数量")
            }
             $.ajax({
             url:"cartfunc.php",
             type:"post",
             data:"method=save&id=<?php echo $rs->id ?>&price=<?php echo $rs->nowprice ?>&val="+$("#num").val()+"&url="+$('.big>a>img').attr("src")+"",
             success:function(data){
               var arr=data.split('&');
                if(arr[1]){
                    if(confirm(arr[1])){return location.href=arr[0];}return false;
                }else{
                    location.href=arr[0];
                }

             }
             })

        });

        //点击yjgm
        $('.btn_yjgm').click(function () {
            if (!$('#num').val()) {
                alert("请输入需要购买的数量")
            }
            $.ajax({
                url: "cartfunc.php",
                type: "post",
                data: "method=yjgm&id=<?php echo $rs->id ?>&price=<?php echo $rs->nowprice ?>&val=" + $("#num").val() +"&url="+$('.big>a>img').attr("src")+"",
                success: function (data) {
                    console.log(data);
                    var arr = data.split('&');
                    console.log(arr);
                    if (arr[1]) {
                        if(confirm(arr[1])){return location.href=arr[0];}return false;
                    }else{
                        location.href=arr[0];
                    }


                }
            })
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

        $('.tab_comment').click(function(){
            $(this).addClass('on');
            $('.tab_detail').removeClass('on');
            $('.section').hide();
        });
        $('.tab_detail').click(function(){
            $(this).addClass('on');
            $('.tab_comment').removeClass('on');
            $('.section').show();
        });



        //点击serach按钮
        $('.search>.iconfont').click(function(){
            var keywords= $.trim($('.search>input').val());
            if(keywords){
                console.log(keywords);
                location.href="search.php?keywords="+keywords+"";

            }
        })

    })()
</script>
</html>