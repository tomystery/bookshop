/**
 * Created by Administrator on 2017/2/11.
 */

$(function () {


(function(){
    var wrapper=$('.wrapper');
    var list=$('.wrapper>ul');
    //插入第一张图片到后面
    var firstChildren=list.children('li:first').clone(true);
    //2. 将克隆的元素追加到元素内部尾部

    list.append(firstChildren);

    //3. 定义一个变量保存移动的速度 （递增递减值）

    var speed = -3;

    //4. 定义一个变量保存要移动的距离 left值

    var left = 0;

    //5.开启一个定时器并保存在变量中

    var sid = setInterval(function(){

        //6.left值进行递增

        left+=speed;


        //7.根据计算的距离 设置样式

        list.css('margin-left',left);

        //8. 如果位置走到最后一张 应该瞬间再从0开始

        if(left <= (list.children().length-1)*-998){
            // 最后一张图的位置   宽度*(长度-1)
            //9.瞬间让left归0

            left = 0;

            //  如果不加else前面条件执行后面left>=0的条件也会执行就会进入死循环


        }else	if(left>=0){

            //9.1判断 如果大于等于0 瞬间回到最后一张图的位置
            //9.2瞬间让left为最后一张图的位置

            left = (list.children().length-1)*-998;
        }


        //自动改变球的颜色
        var index=parseInt( Math.abs((left/998)));
        $('ol>li').eq(index).addClass('current').siblings().removeClass('current');

    },20);


    $('ol li').click(function(){
        //获取索引
        index=$(this).index();
        //点击改变球的颜色
        $('ol>li').eq(index).addClass('current').siblings().removeClass('current');
        //点到那个球就改变那个球的位置
        left=index*-998;

    });
//轮播图结束
})();



//首页分类开始
    (function(){
        $('dd:eq(10)').mouseover(function(){
            $(this).addClass('last')
        });


    })() ;
 //首页分类结束














});
