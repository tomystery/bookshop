<?php
session_start();
include "func.php";
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>填写订单</title>
    <link rel="stylesheet" href="iconfont/iconfont.css"/>
    <link rel="stylesheet" href="css/checkout.css"/>
</head>
<body>
<!--头部相同的部分开始-->
<!--头部-->
<div id="hd">
    <div class="hd_wrap">
        <?php
        if(isset($_SESSION['username'])){
            $username=$_SESSION['username'];
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
            <img src="img/shoppingcar/carorder.png"/>
        </a>
    </div>
</div>
<div class="w960">
    <div class="order_list clearfix">
        <span>送货清单</span>
        <a href="shoppingcar.php">返回购物车</a>
    </div>
    <div class="form_container clearfix">
        <div class="left">
            <p>
                收货信息填完后，可到用户中心查看填写的收货信息。
            </p>
            <?php
            if(isset($_SESSION['cartId'])){
                $cartid=$_SESSION['cartId'];
                $sql="select * from cart where id='$cartid'";
                $rs=mysql_query($sql);
                $rs1=mysql_fetch_assoc($rs);



            ?>
            <p id="yjgm_sum">
            应收款¥<span><?php echo floatval($rs1['num']) * floatval($rs1['price']); ?></span>
            </p>

            <?php } else{ ?>
                <p class="yjgm_sum">
                   没有挑选任何商品
                </p>
            <?php } ?>

        </div>
        <form action="ordersfunc.php?method=yjgm" method="post">
            <h6><span>收货人信息</span></h6>
            <table width="600px" height="200px"   border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">

                <tr>
                    <td bgcolor="#ffffff">收货人姓名:</td>
                    <td bgcolor="#ffffff"><input name="receiver" type="text" class="inputBg" id="receiver" value="" /> (必填)</td>
                </tr>
                <tr>
                    <td bgcolor="#ffffff">详细地址:</td>
                    <td bgcolor="#ffffff"><input name="address" type="text" class="inputBg" id="address" value="" /> (必填)</td>
                </tr>
                <tr>
                    <td bgcolor="#ffffff">联系电话:</td>
                    <td bgcolor="#ffffff"><input name="contact" type="text" class="inputBg" id="contact" value="" /> (必填)</td>
                </tr>
                <tr>
                    <td colspan="4" align="center" bgcolor="#ffffff">
                        <input type="submit" name="Submit" class="bnt_blue_2" value="配送至这个地址" />
                    </td>
                </tr>

            </table>
        </form>
    </div>
    <div class="div_last"></div>
</div>
<?php include "footer.php" ?>

</body>
</html>