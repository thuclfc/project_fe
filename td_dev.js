/**
 * Created by Admin on 12/11/2017.
 */

function box_slider(item,pag,slider,next_button,prev_button) {
    $(''+item+':first-child').addClass('active');
    var with_slider=$(item).length*$(item).width();
    var width_item=$(item).width();
    $(slider).css({'width':with_slider,'display':'flex'});
    var myvar = function () {
        var index_item=$(''+item+'.active').index()+1;
        var movie_slider=index_item*width_item;
        interval = setInterval(function () {
            if(movie_slider >= width_item*$(item).length){
                movie_slider = 0;
            }
            if(index_item >= $(item).length){
                index_item = 0;
            }
            $(item).removeClass('active');
            $(pag).removeClass('active');
            $(''+item+':eq('+index_item+')').addClass('active');
            $(''+pag+':eq('+index_item+')').addClass('active');
            $(slider).css('transform','translateX('+-movie_slider+'px)');
            movie_slider +=width_item*1;
            index_item+=1;
        },4000);
    };
    myvar();
    $(next_button).click(function () {
        clearInterval(interval);
        var active_item=$(''+item+'.active').index();
        var movie_next=(active_item+1)*width_item;
        if(movie_next >= width_item*$(item).length){
            movie_next=(width_item*$(item).length) - width_item;
        }
        $(slider).css({'transform':'translateX('+-movie_next+'px)'});
        $(''+item+'.active').next().addClass('active').prevAll().removeClass('active');
        $(''+pag+'.active').next().addClass('active').prevAll().removeClass('active');
        myvar();
    });
    $(prev_button).click(function () {
        clearInterval(interval);
        var active_item=$(''+item+'.active').index();
        var movie_prev=(active_item-1)*width_item;
        if(active_item == 0){
            movie_prev = 0;
        }
        $(slider).css({'transform':'translateX('+-movie_prev+'px)'});
        $(''+item+'.active').prev().addClass('active').nextAll().removeClass('active');
        $(''+pag+'.active').prev().addClass('active').nextAll().removeClass('active');
        myvar();
    });

    for(var k=1; k<= $(item).length; k++){
        /*var data_img=$(''+item+':nth-child('+k+') img').attr('src');*/
        $('.pag').append('<li><a href="javascript:void(0)">'+k+'</a></li>');
    }

    $(''+pag+':nth-child(1)').addClass('active');
    $(pag).click(function () {
        clearInterval(interval);
        var pag_index=$(this).index();
        $(item).removeClass('active');
        $(pag).removeClass('active');
        $(this).addClass('active');
        $(''+item+':eq('+pag_index+')').addClass('active');
        var movie_pag=pag_index * width_item;
        $(slider).css({"transform":"translateX("+-movie_pag+"px)"});
        myvar();
    });
}
function box_tab(tab,tab_content,tab_active,index_active) {
    $(tab_content).hide();
    $(tab).eq(tab_active).addClass('active');
    $(tab_content).eq(index_active).show();
    $(tab).click(function () {
        $(tab).removeClass('active');
        $(this).addClass('active');
        var tab_index=$(this).index();
        $(tab_content).hide(); $(tab_content).eq(tab_index).show();
    });
}
function slider(item,pag,next,prev,pagp) {
    var length_item=$(item).length;
    $(''+item+':first-child').addClass('active');
    var myvar = function () {
        var index_active=$(''+item+'.active').index()+1;
        interval = setInterval(function () {
            if(index_active >= length_item){index_active=0;}
            $(item).removeClass('active');
            $(pag).removeClass('active');
            $(''+item+':eq('+index_active+')').addClass('active');
            $(''+pag+':eq('+index_active+')').addClass('active');
            index_active++;
        },5000);
    };
    myvar();
    $(next).click(function () {
        clearInterval(interval);
        $(''+item+'.active').next().addClass('active').prevAll().removeClass('active');
        $(''+pag+'.active').next().addClass('active').prevAll().removeClass('active');
        myvar();
    });
    $(prev).click(function () {
        clearInterval(interval);
        $(''+item+'.active').prev().addClass('active').nextAll().removeClass('active');
        $(''+pag+'.active').prev().addClass('active').nextAll().removeClass('active');
        myvar();
    });
    var k=0;
    for(k=1; k<=length_item; k++){
        $(pagp).append('<li><a href="#item'+k+'">'+k+'</a></li>');
    }
    $(''+pag+':nth-child(1)').addClass('active');
    $(pag).click(function () {
        clearInterval(interval);
        var index_it=$(this).index();
        $(item).removeClass('active'); $(pag).removeClass('active');
        $(this).addClass('active');
        $(''+item+':eq('+index_it+')').addClass('active');
        myvar()
    });
}
function open_popup(btn,popup) {
    $(btn).click(function () {
        $(''+popup+',.modal-popup').addClass('open_popup');
    });
    $('.close_popup,.modal-popup').click(function () {
        $(''+popup+',.modal-popup').removeClass('open_popup');
    });
}

/*scrollspy*/
var leng_page=$('.page').length;
$(window).scroll(function () {
    var scroll = $(window).scrollTop()+1;
    var i=1;
    while (i <= leng_page){
        var page_current =$('.page'+i).offset().top;
        if(page_current < scroll){
            $('.right-menu a').removeClass('active');
            $('.item'+i).addClass('active');
        }
        i++;
    }
});
/*get link referrer*/

$(window).load(function () {
    var herf_hs=document.referrer;
    $(".tab_char li a[href$='"+herf_hs+"']").addClass("active1");
    var index_tab=$('.tab_char li a.active1').parent().index();
    $('.lst-char').css('display','none');
    $('.lst-char').eq(index_tab).css('display','block');
});
