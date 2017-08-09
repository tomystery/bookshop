<?php
session_start();
?>
<style>
    .form{
        width:100%;
    }
    .form>p{
        background-color: #f6f6f6;
        font-weight:700;
        color:#8728f2;
        width:100%;
        margin-bottom:16px;
    }
    .td1{
        width:38%;
        text-align: right;
    }
    .subBtn{
        margin:0 auto;
        display:block;
    }
    td{
        height:37px;
    }
    .inputBg{
        height:23px;
        margin-left:9px;
    }

</style>
<div class="form">
    <p>修改密码</p>
    <form name="formPassword" method="post" action="usersfunc.php?method=editpwd">

        <table  width="100%" border="1" bordercolor="#ccc" rules="all" cellpadding="5" align="center">
            <tr>
                <td class="td1">用户名：</td>
                <td class="td2">
                    <?php echo $_SESSION["username"] ?>
                    <input name="uname" type="hidden" size="25" value="<?php echo $_SESSION["username"] ?>" class="inputBg" />

                </td>
            </tr>
            <tr>
                <td class="td1">原密码：</td>
                <td class="td2">
                    <input type="password" name="pwd" class="inputBg" />

                </td>
            </tr>
            <tr>
                <td class="td1">新密码：</td>
                <td class="td2">
                    <input type="password"  name="newpwd" class="inputBg" />

                </td>
            </tr>
            <tr>
                <td class="td1">确认密码：</td>
                <td class="td2">
                    <input type="password" name="repwd"  class="inputBg"/>

                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="确认修改" class="subBtn"/>
                </td>

            </tr>
        </table>
    </form>
</div>