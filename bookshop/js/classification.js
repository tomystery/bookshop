/**
 * Created by Administrator on 2017/2/20.
 */

$('.totop').click(function(){
console.log(111);
    $('html,body').stop().animate({scrollTop:0});
});

/*
$(window).scroll(function(){
    sTop=$(window).scrollTop();
    console.log(sTop);
    if(sTop>0){
        $('.totop').show();
    }
});*/
$(window).scroll(function(){

    //1. 获取滚动距离

    var sTop = $(this).scrollTop();

    //2. 如果滚动距离 超过某个值就显示图片否则隐藏

    if(sTop>=150){// >= $(window).height()

        $('.totop').show();

    }else{
        $('.totop').hide();
    }


});


