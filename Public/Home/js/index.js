$(function() {
    var aSmall = $('.content_middle .table .list');
    var aLi = $('.content_middle ul li');
    var iNow = 0;
	function tanA() {
        if (iNow == 0) {
            document.getElementById('dd1').src = "./Public/Home/img/42.png";
            document.getElementById('dd2').src = "./Public/Home/img/42.png";
            document.getElementById('dd3').src = "./Public/Home/img/42.png";
            document.getElementById('dd4').src = "./Public/Home/img/42.png"
        }
        var imgs = iNow - 1;
        var imgq = iNow - 2;
        var shu = 'dd' + imgs;
        var sha = 'dd' + imgq;
        document.getElementById("dd4").src = "./Public/Home/img/42.png";
        aLi.eq(iNow - 1).fadeIn(1000).siblings().fadeOut(1000);
        aSmall.eq(iNow - 1).addClass('on1').siblings().removeClass('on1');
        document.getElementById(shu).src = "./Public/Home/img/41.png";
        document.getElementById(sha).src = "./Public/Home/img/42.png";

    }
    function run1() {
        iNow++;
        if (iNow > aLi.length) {
            iNow = 1
        }
        $('.table .list').eq(iNow - 1).addClass('Lst' + iNow);
        tanA()
    }
    timer = setInterval(run1, 3000);
    $('.table .list').click(function() {
        $(this).siblings().addClass('Lst');
        $(this).removeClass('Lst');
		$(this).addClass('Lst' + iNow);
    })
	$('.table,.logo').hover(function() {
        clearInterval(timer)
    })
	$('.table,.logo').mouseleave(function() {
        timer = setInterval(run1, 3000);
        timer
    })

    //滚动菜单
    scroll_navtition();
    function scroll_navtition()
    {
        var screen_val,
            curr_page_high,
            screen_high;
        var navtitions;
        curr_page_high = document.body.clientHeight;
        screen_high = jQuery(window).height();
       jQuery(window).scroll(function(e)
        {
            screen_val = jQuery(window).scrollTop();
            if(screen_high <= curr_page_high - 1) {
                if(screen_val>0)
                   navtitions = jQuery('.header').css(
                       {
                       "position":"fixed",
                       "top":"0px",
                       "background":'#FFF',
                       'width':"99.99%"
                       })
                else
                    navtitions = jQuery('.header').css(
                        {
                            "position":"relative",
                            "top":"0px"
                        })

            }
        })
    }


});
