<?php
session_start();
include "func.php";

?>
<!DOCTYPE html>
<head lang="en">
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="css/index.css"/>
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
            <a type="button" href="javascript:void(0)" class="searchBtn"></a>
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
<!--三级导航结束-->

<!--首页分类+轮播图-->
<div class="index_class_wrap">
    <div class="index_dl">
        <dl>
            <dt>图书分类</dt>
                <dd>
                    <a  href="classification.php?id=1" class="wy" >文艺</a>
                    <!--        hover_layer1-->
                    <div class="hover_layer" style="top:10px">
                        <ul class="index_ul clearfix">
                            <li class="index_li">
                                <p><a href="classification.php?id=1">小说 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=1">
                                        <img class="one" src="img/main/l11.jpg"/>
                                        <img class="two" src="img/main/l1_1.jpg"/>
                                    </a>
                                </div>

                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=1">文学 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=1">
                                        <img class="one" src="img/main/l12.jpg"/>
                                        <img class="two" src="img/main/l1_2.jpg"/>
                                    </a>
                                </div>

                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=1">青春文学 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=1">
                                        <img class="one" src="img/main/l13.jpg"/>
                                        <img class="two" src="img/main/l1_3.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=1">动漫/幽默 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=1">
                                        <img class="one" src="img/main/l14.jpg"/>
                                        <img class="two" src="img/main/l1_4.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=1">艺术 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=1">
                                        <img class="one" src="img/main/l15.jpg"/>
                                        <img class="two" src="img/main/l1_5.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=1">传记</a></p>
                                <div class="cover">
                                    <a href="classification.php?id=1">
                                        <img class="one" src="img/main/l16.jpg"/>
                                        <img class="two" src="img/main/l1_6.jpg"/>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </dd>
                <dd class="odd">
                    <a  href="classification.php?id=2" class="jg" >经管</a>
                    <!--        hover_layer2-->
                    <div class="hover_layer" style="top:10px">
                        <ul class="index_ul clearfix">
                            <li class="index_li">
                                <p><a href="classification.php?id=2">成功/励志 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=2">
                                        <img class="one" src="img/main/l21.jpg"/>
                                        <img class="two" src="img/main/l2_1.jpg"/>
                                    </a>
                                </div>

                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=2">管理 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=2">
                                        <img class="one" src="img/main/l22.jpg"/>
                                        <img class="two" src="img/main/l2_2.jpg"/>
                                    </a>
                                </div>

                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=2">投资理财 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=2">
                                        <img class="one" src="img/main/l23.jpg"/>
                                        <img class="two" src="img/main/l2_3.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=2">经济 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=2">
                                        <img class="one" src="img/main/l24.jpg"/>
                                        <img class="two" src="img/main/l2_4.jpg"/>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </dd>
                <dd>
                    <a  href="classification.php?id=2" class="sk" >社科</a>
                    <!--        hover_layer3-->
                    <div class="hover_layer" style="top:10px">
                        <ul class="index_ul clearfix">
                            <li class="index_li">
                                <p><a href="classification.php?id=3">哲学/宗教 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=3">
                                        <img class="one" src="img/main/l31.jpg"/>
                                        <img class="two" src="img/main/l3_1.jpg"/>
                                    </a>
                                </div>

                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=3">历史 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=3">
                                        <img class="one" src="img/main/l32.jpg"/>
                                        <img class="two" src="img/main/l3_2.jpg"/>
                                    </a>
                                </div>

                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=3">政治/军事 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=3">
                                        <img class="one" src="img/main/l33.jpg"/>
                                        <img class="two" src="img/main/l3_3.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=3">文化</a></p>
                                <div class="cover">
                                    <a href="classification.php?id=3">
                                        <img class="one" src="img/main/l34.jpg"/>
                                        <img class="two" src="img/main/l3_4.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=3">社会科学</a></p>
                                <div class="cover">
                                    <a href="classification.php?id=3">
                                        <img class="one" src="img/main/l35.jpg"/>
                                        <img class="two" src="img/main/l3_5.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=3">心理学</a></p>
                                <div class="cover">
                                    <a href="classification.php?id=3">
                                        <img class="one" src="img/main/l36.jpg"/>
                                        <img class="two" src="img/main/l3_6.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=3">古籍</a></p>
                                <div class="cover">
                                    <a href="classification.php?id=3">
                                        <img class="one" src="img/main/l37.jpg"/>
                                        <img class="two" src="img/main/l3_7.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=3">法律</a></p>
                                <div class="cover">
                                    <a href="classification.php?id=3">
                                        <img class="one" src="img/main/l38.jpg"/>
                                        <img class="two" src="img/main/l3_8.jpg"/>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </dd>
                <dd class="odd">
                    <a  href="classification.php?id=3" class="sh" >生活</a>
                    <!--        hover_layer4-->
                    <div class="hover_layer" style="top:10px">
                        <ul class="index_ul clearfix">
                            <li class="index_li">
                                <p><a href="classification.php?id=4">两性关系 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=4">
                                        <img class="one" src="img/main/l41.jpg"/>
                                        <img class="two" src="img/main/l4_1.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=4">孕产/胎教 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=4">
                                        <img class="one" src="img/main/l42.jpg"/>
                                        <img class="two" src="img/main/l4_2.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=4">育儿/早教 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=4">
                                        <img class="one" src="img/main/l43.jpg"/>
                                        <img class="two" src="img/main/l4_3.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=4">亲子/家庭 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=4">
                                        <img class="one" src="img/main/l44.jpg"/>
                                        <img class="two" src="img/main/l4_4.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=4">保健/养生 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=4">
                                        <img class="one" src="img/main/l45.jpg"/>
                                        <img class="two" src="img/main/l4_5.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=4">体育/运动 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=4">
                                        <img class="one" src="img/main/l46.jpg"/>
                                        <img class="two" src="img/main/l4_6.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=4">休闲/爱好 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=4">
                                        <img class="one" src="img/main/l47.jpg"/>
                                        <img class="two" src="img/main/l4_7.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=4">旅游/地图 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=4">
                                        <img class="one" src="img/main/l48.jpg"/>
                                        <img class="two" src="img/main/l4_8.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=4">烹饪/美食 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=4">
                                        <img class="one" src="img/main/l49.jpg"/>
                                        <img class="two" src="img/main/l4_9.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=4">时尚/美妆 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=4">
                                        <img class="one" src="img/main/l410.jpg"/>
                                        <img class="two" src="img/main/l4_10.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=4">手工/DIY </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=4">
                                        <img class="one" src="img/main/l411.jpg"/>
                                        <img class="two" src="img/main/l4_11.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=4">家庭/家居 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=4">
                                        <img class="one" src="img/main/l412.jpg"/>
                                        <img class="two" src="img/main/l4_12.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=4">风水/占卜 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=4">
                                        <img class="one" src="img/main/l413.jpg"/>
                                        <img class="two" src="img/main/l4_13.jpg"/>
                                    </a>
                                </div>
                            </li>
                    </div>
                </dd>
                <dd>
                    <a  href="classification.php?id=4" class="jy" >教育</a>
                    <!--        hover_layer5-->
                    <div class="hover_layer" style="top:10px">
                        <ul class="index_ul clearfix">
                            <li class="index_li">
                                <p><a href="classification.php?id=5">中小学教辅 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=5">
                                        <img class="one" src="img/main/l51.jpg"/>
                                        <img class="two" src="img/main/l5_1.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=5">考试 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=5">
                                        <img class="one" src="img/main/l52.jpg"/>
                                        <img class="two" src="img/main/l5_2.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=5">外语 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=5">
                                        <img class="one" src="img/main/l53.jpg"/>
                                        <img class="two" src="img/main/l5_3.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=5">大中专教材 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=5">
                                        <img class="one" src="img/main/l54.jpg"/>
                                        <img class="two" src="img/main/l5_4.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=5">工具书 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=5">
                                        <img class="one" src="img/main/l55.jpg"/>
                                        <img class="two" src="img/main/l5_5.jpg"/>
                                    </a>
                                </div>
                            </li>

                    </div>
                </dd>
                <dd class="odd">
                    <a  href="classification.php?id=5" class="kj" >科技</a>
                    <!--        hover_layer6-->
                    <div class="hover_layer" style="top:22px">
                        <ul class="index_ul clearfix">
                            <li class="index_li">
                                <p><a href="classification.php?id=6">科普读物 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=6">
                                        <img class="one" src="img/main/l61.jpg"/>
                                        <img class="two" src="img/main/l6_1.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=6">计算机/网络 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=6">
                                        <img class="one" src="img/main/l62.jpg"/>
                                        <img class="two" src="img/main/l6_2.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=6">医学 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=6">
                                        <img class="one" src="img/main/l63.jpg"/>
                                        <img class="two" src="img/main/l6_3.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=6">工业技术 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=6">
                                        <img class="one" src="img/main/l64.jpg"/>
                                        <img class="two" src="img/main/l6_4.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=6">建筑 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=6">
                                        <img class="one" src="img/main/l65.jpg"/>
                                        <img class="two" src="img/main/l6_5.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=6">自然科学 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=6">
                                        <img class="one" src="img/main/l66.jpg"/>
                                        <img class="two" src="img/main/l6_6.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=6">农业/林业 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=6">
                                        <img class="one" src="img/main/l67.jpg"/>
                                        <img class="two" src="img/main/l6_7.jpg"/>
                                    </a>
                                </div>
                            </li>

                    </div>
                </dd>
                <dd>
                    <a  href="classification.php?id=7" class="ts" >童书</a>
                    <!--        hover_layer7-->
                    <div class="hover_layer" style="top:57px">
                        <ul class="index_ul clearfix">
                            <li class="index_li">
                                <p><a href="classification.php?id=7">少儿英语 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=7">
                                        <img class="one" src="img/main/l71.jpg"/>
                                        <img class="two" src="img/main/l7_1.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=7">成长/益智 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=7">
                                        <img class="one" src="img/main/l72.jpg"/>
                                        <img class="two" src="img/main/l7_2.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=7">动漫/图书画 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=7">
                                        <img class="one" src="img/main/l73.jpg"/>
                                        <img class="two" src="img/main/l7_3.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=7">启蒙读物 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=7">
                                        <img class="one" src="img/main/l74.jpg"/>
                                        <img class="two" src="img/main/l7_4.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=7">儿童读物 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=7">
                                        <img class="one" src="img/main/l75.jpg"/>
                                        <img class="two" src="img/main/l7_5.jpg"/>
                                    </a>
                                </div>
                            </li>
                    </div>
                </dd>
                <dd class="odd">
                    <a  href="classification.php?id=8" class="jks" >进口书</a>
                <!--        hover_layer8-->
                    <div class="hover_layer" style="top:186px">
                    <ul class="index_ul clearfix">
                        <li class="index_li">
                            <p><a href="classification.php?id=8">外文原版书 </a></p>
                            <div class="cover">
                                <a href="classification.php?id=8">
                                    <img class="one" src="img/main/l81.jpg"/>
                                    <img class="two" src="img/main/l8_1.jpg"/>
                                </a>
                            </div>
                        </li>
                        <li class="index_li">
                            <p><a href="classification.php?id=8">港台图书</a></p>
                            <div class="cover">
                                <a href="classification.php?id=8">
                                    <img class="one" src="img/main/l82.jpg"/>
                                    <img class="two" src="img/main/l8_2.jpg"/>
                                </a>
                            </div>
                        </li>
                        <li class="index_li">
                            <p><a href="classification.php?id=8">小语种 </a></p>
                            <div class="cover">
                                <a href="classification.php?id=8">
                                    <img class="one" src="img/main/l83.jpg"/>
                                    <img class="two" src="img/main/l8_3.jpg"/>
                                </a>
                            </div>
                        </li>
                </div>
                </dd>
                <dd>
                    <a  href="classification.php?id=9" class="qkzz" class="odd" >期刊杂志</a>
                    <!--        hover_layer9-->
                    <div class="hover_layer" style="top:33px">
                        <ul class="index_ul clearfix">
                            <li class="index_li">
                                <p><a href="classification.php?id=9">旅游 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=9">
                                        <img class="one" src="img/main/l91.jpg"/>
                                        <img class="two" src="img/main/l9_1.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=9">体育</a></p>
                                <div class="cover">
                                    <a href="classification.php?id=9">
                                        <img class="one" src="img/main/l92.jpg"/>
                                        <img class="two" src="img/main/l9_2.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=9">军事 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=9">
                                        <img class="one" src="img/main/l93.jpg"/>
                                        <img class="two" src="img/main/l9_3.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=9">动漫游戏 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=9">
                                        <img class="one" src="img/main/l94.jpg"/>
                                        <img class="two" src="img/main/l9_4.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=9">教育科普 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=9">
                                        <img class="one" src="img/main/l95.jpg"/>
                                        <img class="two" src="img/main/l9_5.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=9">外文杂志 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=9">
                                        <img class="one" src="img/main/l96.jpg"/>
                                        <img class="two" src="img/main/l9_6.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=9">财经数码 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=9">
                                        <img class="one" src="img/main/l97.jpg"/>
                                        <img class="two" src="img/main/l9_7.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=9">健康生活 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=9">
                                        <img class="one" src="img/main/l98.jpg"/>
                                        <img class="two" src="img/main/l9_8.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=9">时政 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=9">
                                        <img class="one" src="img/main/l99.jpg"/>
                                        <img class="two" src="img/main/l9_9.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=9">专业期刊 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=9">
                                        <img class="one" src="img/main/l910.jpg"/>
                                        <img class="two" src="img/main/l9_10.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=9">文学 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=9">
                                        <img class="one" src="img/main/l911.jpg"/>
                                        <img class="two" src="img/main/l9_11.jpg"/>
                                    </a>
                                </div>
                            </li>
                    </div>
                </dd>
                <dd class="odd">
                    <a  href="classification.php?id=10" class="wwnp" >网文女频</a>
                    <!--        hover_layer10-->
                    <div class="hover_layer" style="top:162px">
                        <ul class="index_ul clearfix">
                            <li class="index_li">
                                <p><a href="classification.php?id=10">现代言情 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=10">
                                        <img class="one" src="img/main/l101.png"/>
                                        <img class="two" src="img/main/l10_1.png"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=10">穿越重生</a></p>
                                <div class="cover">
                                    <a href="classification.php?id=10">
                                        <img class="one" src="img/main/l102.png"/>
                                        <img class="two" src="img/main/l10_2.png"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=10">古装言情 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=10">
                                        <img class="one" src="img/main/l103.png"/>
                                        <img class="two" src="img/main/l10_3.png"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=10">青春校园 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=10">
                                        <img class="one" src="img/main/l104.png"/>
                                        <img class="two" src="img/main/l10_4.png"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=10">幻想言情 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=10">
                                        <img class="one" src="img/main/l105.png"/>
                                        <img class="two" src="img/main/l10_5.png"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=10">纯爱言情</a></p>
                                <div class="cover">
                                    <a href="classification.php?id=10">
                                        <img class="one" src="img/main/l106.jpg"/>
                                        <img class="two" src="img/main/l10_6.jpg"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=10">短篇精品 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=10">
                                        <img class="one" src="img/main/l107.png"/>
                                        <img class="two" src="img/main/l10_7.png"/>
                                    </a>
                                </div>
                            </li>
                    </div>
                </dd>
                <dd>
                    <a  href="classification.php?id=11" class="wwnn" >网文男频</a>
                    <!--        hover_layer11-->
                    <div class="hover_layer" style="bottom:10px">
                        <ul class="index_ul clearfix">
                            <li class="index_li">
                                <p><a href="classification.php?id=11">玄幻奇幻 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=11">
                                        <img class="one" src="img/main/l111.png"/>
                                        <img class="two" src="img/main/l11_1.png"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=11">现代都市</a></p>
                                <div class="cover">
                                    <a href="classification.php?id=11">
                                        <img class="one" src="img/main/l112.png"/>
                                        <img class="two" src="img/main/l11_2.png"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=11">武侠仙侠 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=11">
                                        <img class="one" src="img/main/l113.png"/>
                                        <img class="two" src="img/main/l11_3.png"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=11">历史军事 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=11">
                                        <img class="one" src="img/main/l114.png"/>
                                        <img class="two" src="img/main/l11_4.png"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=11">游戏竞技 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=11">
                                        <img class="one" src="img/main/l115.png"/>
                                        <img class="two" src="img/main/l11_5.png"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=11">科幻灵异</a></p>
                                <div class="cover">
                                    <a href="classification.php?id=11">
                                        <img class="one" src="img/main/l116.png"/>
                                        <img class="two" src="img/main/l11_6.png"/>
                                    </a>
                                </div>
                            </li>
                            <li class="index_li">
                                <p><a href="classification.php?id=11">短篇精品 </a></p>
                                <div class="cover">
                                    <a href="classification.php?id=10">
                                        <img class="one" src="img/main/l117.jpg"/>
                                        <img class="two" src="img/main/l11_7.jpg"/>
                                    </a>
                                </div>
                            </li>
                    </div>
                </dd>



        </dl>
    </div>









    <!--轮播图开始-->
    <div class="wrapper">
    <ul>
        <li><img src="img/main/scroll1.jpg" alt=""/></li>
        <li><img src="img/main/scroll2.jpg" alt=""/></li>
        <li><img src="img/main/scroll3.jpg" alt=""/></li>
        <li><img src="img/main/scroll4.jpg" alt=""/></li>
        <li><img src="img/main/scroll5.jpg" alt=""/></li>
        <li><img src="img/main/scroll6.jpg" alt=""/></li>
    </ul>
    <ol>
        <li class="current"></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ol>
</div>
</div>

<!--轮播图结束-->
<!--限时抢购开始-->
<div class="time_wrap">
    <div class="time_buy">
            <p>限时抢购</p>
        <ul>
            <?php
            $str="select * from goods where special='是' order by id desc limit 0 , 6  ";
            $result = mysql_query($str);
            while($arr = mysql_fetch_assoc($result)){
            ?>
            <li>
                <div class="bookCover">
                    <a  href="detail.php?id=<?php echo $arr['id'] ?>">
                        <img class="cover_img" src="<?php echo $arr['image2'] ?>"/>
                        <img  class="xsq" src="img/main/xsq.png"/>
                    </a>
                </div>
                <div class="bookInfo">
                    <div class="title">
                        <a  href="detail.php?id=<?php echo $arr['id'] ?>">
                            <?php echo $arr['name'] ?>
                        </a>
                    </div>
                    <div class="author"><?php echo $arr['author'] ?></div>
                    <div class="stars">
                        <span class="has"></span>
                        <span class="has"></span>
                        <span class="has"></span>
                        <span class="has"></span>
                        <span class="has"></span>
                    </div>
                    <div class="price">
                        <span class="now">
                          <i>¥<?php echo $arr['nowprice'] ?></i>
                        </span>|
                        <span>￥<?php echo $arr['marketprice'] ?></span>
                    </div>
                    <div class="des">
                        <?php echo $arr['contents'] ?>
                    </div>

                </div>
            </li>
            <?php } ?>


        </ul>
    </div>
<div class="index_right">
    <div class="index_nav">新书榜
        <div class="bar"></div>
    </div>
    <div class="index_publish">
        <div class="list_content">
            <div class="fst_level">
                <div class="mark"></div>
                <h3>
                    <a href="detail.php?id=26">股票技术分析全书</a>
                </h3>
                <div class="book_content">
                    <div class="cover">
                        <a href="detail.php?id=26"><img src="img/goods/cover.jpg"/></a>
                    </div>
                    <div class="info">
                        <span class="grey">作者：王达菲</span>
                        <div class="stars">
                            <span class="has"></span>
                            <span class="has"></span>
                            <span class="has"></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="price_inuse">
                            <span class="block">￥16.95</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fst_level">
                <div class="mark_2"></div>
                <h3>
                    <a href="detail.php?id=27">再忙也要知道的成功定律</a>
                </h3>
                <div class="book_content">
                    <div class="cover">
                        <a href="detail.php?id=27"><img src="img/goods/cover_2.jpg"/></a>
                    </div>
                    <div class="info">
                        <span class="grey">作者：刘鹏，邹明</span>
                        <div class="stars">
                            <span class="has"></span>
                            <span class="has"></span>
                            <span class="has"></span>
                            <span class="has"></span>
                            <span></span>
                        </div>
                        <div class="price_inuse">
                            <span class="block">￥21.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--第一二本结束-->
            <!--第三本开始-->

            <div class="nopic">
                <span class="count3">3</span>
                <a href="detail.php?id=1">红拂夜奔</a>
                <span class="orange">￥20</span>
            </div>
            <!--第三本结束-->
            <div class="nopic">
                <span class="count3">4</span>
                <a href="detail.php?id=3">我们从未陌生过</a>
                <span class="orange">￥10</span>
            </div>
            <div class="nopic">
                <span class="count3">5</span>
                <a href="detail.php?id=4">蚂蚁金服</a>
                <span class="orange">￥21</span>
            </div>
            <div class="nopic">
                <span class="count3">6</span>
                <a href="detail.php?id=6">李嘉诚：我一生的理念</a>
                <span class="orange">￥6.9</span>
            </div>

        </div>

    </div>

</div>
    <!--新书榜结束-->
</div>

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
    <a class="admin" href="admin/">管理员登录</a>
</div>
</body>
<script src="js/index.js"></script>
<script>
    (function(){
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
        //点击searchBtn
        $('.searchBtn').click(function(){
            var keywords= $.trim($('.searchText').val());
            if(keywords){
                console.log(keywords);
                location.href="search.php?keywords="+keywords+"";

            }
        })
    })();

</script>
</html>