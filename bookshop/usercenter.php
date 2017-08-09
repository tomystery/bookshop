<?php include "top.php" ?>
            <li>
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




        </div>

    </div>
</div>
<div class="footer_bar"></div>
<?php include "footer.php" ?>

</body>

<script>
    //向右的箭头
    (function(){

        $.ajax({
            url:"uwelcome.php",
            type:"post",
            data:"",
            success:function(data){
                $('.R_box').html(data)

            }
        });
                //箭头
            $(' .areaL>ul>li').click(function(){
                $(this).addClass('cus').siblings().removeClass('cus');
            });

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
