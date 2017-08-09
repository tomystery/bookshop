<?php include "top.php" ?>
            <li class="cus">
                <a class="myOrder" href="listorders.php">
                    <img src="img/images/u3.gif"/>我的订单
                </a>
            </li>
            <li class="li_last clearfix">
                <a href="exit.php"><img src="img/images/bnt_sign.gif"/></a>

            </li>
        </ul>
    </div>
    <div class="areaR">
        <div class="R_box">
            <p class="table_p">我的订单</p>
            <table width="100%" border="0" cellpadding="5" cellspacing="1"
                   bgcolor="#dddddd">
                <tr align="center">
                    <td align="center" bgcolor="#ebf0f7">订单号</td>
                    <td align="center" bgcolor="#ebf0f7">图书</td>
                    <td align="center" bgcolor="#ebf0f7">数量</td>
                    <td align="center" bgcolor="#ebf0f7">单价</td>
                    <td align="center" bgcolor="#ebf0f7">评价</td>
                </tr>
                <?php
                $ordercode = $_REQUEST["ordercode"];
                $str = "select  a.id as id , a.ordercode as ordercode , b.name as name , ";
                $str .=" a.num as num , a.price as price   from details a , goods b where a.goodsid = b.id and a.ordercode = '$ordercode'  order by id desc ;";
                $result = check($str);
                $i=0;
                while($rs=mysql_fetch_object($result)){
                    ?>
                    <tr align="center" bgcolor="#FFFFFF" onmouseover="this.style.background='#F2FDFF'" onmouseout="this.style.background='#FFFFFF'">
                        <td align="center"><?php echo $rs->ordercode ;?></td>
                        <td align="center"><?php echo $rs->name ;?></td>
                        <td align="center"><?php echo $rs->num ;?></td>
                        <td align="center"><?php echo $rs->price ;?></td>
                        <td align="center"><a href="addtopic.php?id=<?php echo $rs->id ;?>">评价</a></td>
                    </tr>
                    <?php
                    $i=$i+1;
                }
                ?>
            </table>
        </div>

    </div>
</div>
<div class="footer_bar"></div>
<?php include "footer.php" ?>
</body>

<script>
    //向右的箭头
    (function(){
        $(' .areaL>ul>li').click(function(){
            $(this).addClass('cus').siblings().removeClass('cus');
        });
        //跳到listorder后不需要立即发送ajax请求
        //welcome
        $('.welcome').click(function(){
            $.ajax({
                url:"uwelcome.php",
                type:"post",
                data:"",
                success:function(data){
                    $('.R_box').html(data)

                }
            });
        });

        //editPwd
        $('.editPwd').click(function(){
            $.ajax({
                url:"editpwd.php",
                type:"post",
                data:"",
                success:function(data){
                    $('.R_box').html(data)

                }

            })
        });
        //userInfo
        $('.userInfo').click(function(){
            $.ajax({
                url:"userinfo.php",
                type:"post",
                data:"",
                success:function(data){
                    $('.R_box').html(data)

                }

            })
        });

    })()



</script>
</html>
