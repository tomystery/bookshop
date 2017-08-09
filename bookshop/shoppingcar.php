<?php
session_start();
include "func.php";
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>我的购物车</title>
    <link rel="stylesheet" href="iconfont/iconfont.css"/>
    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="css/shoppingcar.css"/>
</head>
<body>
<!--头部相同的部分开始-->
<!--头部-->
<div id="hd">
    <div class="hd_wrap">
        <?php
        $username=$_SESSION['username'];
        $userid=$_SESSION['userid'];


        if(isset($username)){

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
<!--头部相同的部分结束-->

<div class="shoppingcar_wrap">
    <a href="index.php"></a>
</div>
<div class="logo_line">
    <div class="w960 clearfix">
        <div class="procedure">
            <span class="current my_car">我的购物车</span>
            <span class="w_order">填写订单</span>
            <span class="f_order" >完成订单</span>
        </div>
        <a href="index.php" class="logo">
            <img src="img/shoppingcar/car_logo.png"/>
        </a>
    </div>
</div>
<?php
$sql="select * from cart where usersid=$userid";
$result=mysql_query($sql);
$num=mysql_num_rows($result);
if(isset($username) && $num){
?>
    <!--这是送货地址一栏-->
    <div class="add_line"></div>
    <div class="w960">
        <ul class="shopping_title clearfix">
            <li class="f1">
                <!-- <a class="check_now select_all" href="javascript:void(0)"></a>
                 全选-->
            </li>
            <li class="f2">商品信息</li>
            <li class="f3">单价（元）</li>
            <li class="f4">数量（元）</li>
            <li class="f5">金额（元）</li>
            <li class="f6">操作</li>
        </ul>
        <div class="fn_shop">
            <table border="0" cellspacing="0" cellpadding="0"  class="shop_title">
                <tr>
                    <td class="fn_shop_td"><a class="check_now " href="javascript:void(0)"></a></td>
                    <td><img src="img/shoppingcar/e.png"/></td>
                    <td><span>书城书籍</span></td>
                </tr>
            </table>
            <div class="shopping_list">
                <table width="100%">
                    <?php
                    $total = 0;
                    $total_num=0;
                    $userid = $_SESSION["userid"];
                    $str = "select  a.id as id , b.name as goodsid , a.usersid as userid , ";
                    $str .= " a.num as num , a.price as price , a.addtime as addtime ,a.image as image  from cart a , goods b ";
                    $str .= " where a.goodsid = b.id and a.usersid = '$userid'  order by id desc ;";
                    $result = check($str);
                    while($rs=mysql_fetch_object($result)){
                        ?>
                        <tr>
                            <td class="row1">&nbsp;&nbsp;</td>
                            <td class="row_img">
                                <img src="<?php echo $rs->image?>"/>
                                <div class="img_hide">
                                    <img src="img/shoppingcar/L_1.png"/>
                                </div>
                            </td>
                            <td class="row_name">
                                <div class="name">
                                    <a href="javascript:void(0)"><?php echo $rs->goodsid  ?></a>
                                </div>
                            </td>
                            <td class="row3"><span>¥<?php echo $rs->price  ?></span></td>
                            <td class="row3">
                                <input type="hidden" name="cartid" id="cartid" value="<?php echo $rs->id  ?>" class="t0" />
                                <span><?php echo $rs->num  ?></span>
                            </td>
                            <td class="row4"><span class="red">¥<?php echo floatval($rs->price)*floatval($rs->num)  ?></span></td>
                            <td class="delete"><a href="cartfunc.php?id=<?php echo $rs->id; ?>&&method=delete"
                                                  onclick="{if(confirm('确定要删除吗?')){return true;}return false;}">删除</a></td>
                        </tr>
                        <?php
                        $total = $total + floatval($rs->price)*floatval($rs->num);
                        $total_num=$total_num+$rs->num;
                    }
                    ?>
                    <tr class="title">
                        <td class="row1">&nbsp;</td>
                        <td class="total_price">店铺合计</td>
                        <td colspan="2">&nbsp;</td>
                        <td colspan="3" class="row4"><span class="red">¥<?php echo $total  ?></span></td>
                    </tr>

                </table>

            </div>
        </div>

    </div>

    <!--total区开始-->
    <div class="total">
        <div class="shopping_total">
            <div class="shopping_total_right">
                <a class="total_btn" href="checkout.php">结&nbsp; &nbsp;  算</a>
                <div class="subtotal">
                    <p>
                        <span class="cart_sum">总计(不含运费)：</span>
                        <span class="price">¥<?php echo $total ?></span>
                    </p>
                    <p>
                        <span class="cart_sum">已节省：</span>
                        <span class="total_favor">¥0.00</span>
                    </p>


                </div>
            </div>
            <div class="shopping_total_left">
                <!-- <a class="check_now select_all" href="javascript:void(0)"></a>全选
                 <a class="btn_remove" href="javascript:void(0)">批量删除</a>-->
            <span>已选择
                <font color="red"><?php echo $total_num ?></font>
                件商品
            </span>
            </div>
        </div>

    </div>
    <!--total区结束-->
<?php } else if(isset($username) && !$num) {?>

    <div class="empty">
        <p>您的购物车还是空的，您可以：</p>
        <a href="index.php" class="btn">去逛逛</a>
    </div>
<?php } else if(empty($username)){ ?>
    <div class="empty">
        <p>您的购物车还是空的，您可以：</p>
        <a href="login.php" class="btn">立即登录</a>
        登录后购物车的商品将保存到您的账号中，或者
        <a href="index.php">去逛逛</a>
    </div>
<?php } ?>

<?php include "footer.php" ?>



</body>
<script src="js/jquery-1.7.2.js"></script>
<script type="application/javascript">

    $('.select_all').click(function(){
        if($(this).hasClass('click_now')){
            $('.check_now').removeClass('click_now');
        }else{
            $('.check_now').addClass('click_now')
        }

//        $('.check_now').toggleClass('click_now');

    });
    $('.check').click(function(){
        $(this).toggleClass('click_now');
       /* if($('select_all').hasClass('click_now')){
            $(this).toggleClass('click_now');
            $('select_all').removeClass('click_now');
        }*/

    })
</script>
</html>