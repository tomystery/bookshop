<?php
session_start();
?>
<style>
    .center1>p{
        font-weight:700;
        height:38px;
        line-height:38px;
    }
    .center1>div{
        height:38px;
        line-height:38px;
    }
</style>
<div class="center1">
    <p><b class="font1"><?php echo $_SESSION["username"] ?></b>欢迎您回到 用户中心！</p>
    <div>您的身份是 注册用户</div>
</div>
