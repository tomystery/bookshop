<?php
include "func.php";
$styleid = $_REQUEST['id'];
$str="select * from goods where cateid = $styleid order by id desc  ";
$result = mysql_query($str);
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
    <?php
}
?>