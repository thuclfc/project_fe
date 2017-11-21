$(document).ready(function() {
	/* Search */
	$('.button-search').bind('click', function() {
		url = $('#hidden').attr('href') + 'index.php?route=product/search';
				 
		var search = $('input[name=\'search\']').attr('value');
		
		if (search) {
			url += '&search=' + encodeURIComponent(search);
		}
		
		location = url;
	});
	
	$('#header input[name=\'search\']').bind('keydown', function(e) {
		if (e.keyCode == 13) {
			url = $('#hidden').attr('href') + 'index.php?route=product/search';
			 
			var search = $('input[name=\'search\']').attr('value');
			
			if (search) {
				url += '&search=' + encodeURIComponent(search);
			}
			
			location = url;
		}
	});
	/* Ajax Cart */

	if ($('body').width() < 980) {
			$('#cart .heading span.link_a').live("click", function(){
				if ($('#cart').hasClass('active')) { 
					jQuery('#cart').removeClass('active'); 
					}
				else {
					$('#cart').addClass('active');
					}
				})
			
			} else {
			$('#cart > .heading span.link_a').live('mouseover', function() {
			$('#cart').addClass('active');
			
			$('#cart').load('index.php?route=module/cart #cart > *');
			
			$('#cart').live('mouseleave', function() {
				$(this).removeClass('active');
			});
			});
		}
});

function getURLVar(key) {
	var value = [];
	
	var query = String(document.location).split('?');
	
	if (query[1]) {
		var part = query[1].split('&');

		for (i = 0; i < part.length; i++) {
			var data = part[i].split('=');
			
			if (data[0] && data[1]) {
				value[data[0]] = data[1];
			}
		}
		
		if (value[key]) {
			return value[key];
		} else {
			return '';
		}
	}
}
function addToCart(product_id, quantity) {
	quantity = typeof(quantity) != 'undefined' ? quantity : 1;

	$.ajax({
		url: 'index.php?route=checkout/cart/add',
		type: 'post',
		data: 'product_id=' + product_id + '&quantity=' + quantity,
		dataType: 'json',
		success: function(json) {
			$('.success, .warning, .attention, .information, .error').remove();
			
			if (json['redirect']) {
				location = json['redirect'];
			}
			
			if (json['success']) {
				$('#notification').html('<div class="success" style="display: none;"><i class="fa fa-thumbs-up"></i>' + json['success'] + '<i class="fa fa-times-circle"></i></div>');
				
				$('.success').fadeIn('slow');
				
				$('#cart-total').html(json['total']);
				$('#cart-total2').html(json['total']);
				$('#cart').load('index.php?route=module/cart #cart > *');
				
				
			}	
			setTimeout(function() {$('.success').fadeOut(1000)},3000)
		}
	});
}
function addToWishList(product_id) {
	$.ajax({
		url: 'index.php?route=account/wishlist/add',
		type: 'post',
		data: 'product_id=' + product_id,
		dataType: 'json',
		success: function(json) {
			$('.success, .warning, .attention, .information').remove();
						
			if (json['success']) {
				$('#notification').html('<div class="success" style="display: none;"><i class="fa fa-thumbs-up"></i>' + json['success'] + '<span><i class="fa fa-times-circle"></i></span></div>');
				
				$('.success').fadeIn('slow');
				
				$('#wishlist-total').html(json['total']);
			
			}	
			setTimeout(function() {$('.success').fadeOut(1000)},3000)
		}
	});
}

$(document).ready(function() {
	if ($('#compare .compare-block').length ==0 ) {
		$('#compare').hide()
	} else {
		$('#compare').show()
	}
    box_slider('.sliders .item','.sliders .item.active','.pag li','.pag li.active','.sliders','.next','.prev');
});
function addToCompare(product_id) { 
	$.ajax({
		url: 'index.php?route=product/compare/add',
		type: 'post',
		data: 'product_id=' + product_id,
		dataType: 'json',
		success: function(json) {
			$('.success, .warning, .attention, .information').remove();
						
			if (json['success']) {
				$('#compare').load('index.php?route=module/compare #compare > *');
				$('#compare-total').html(json['total']);
				$('#notification').html('<div class="success" style="display: none;"><i class="fa fa-thumbs-up"></i>' + json['success'] + '<span class="close"><i class="fa fa-times-circle "></i></span></div>');
				
				$('.success').fadeIn('slow');
				
				
				$('#compare').show();
				$('html, body').animate({scrollTop:$('#compare').position().top}, 'slow');
			}
			setTimeout(function() {$('.success').fadeOut(1000)},3000)
		}
		
	});
}
function RemoveCompare(product_id) { 
	$.ajax({
		url: 'index.php?route=module/compare&remove='+ product_id,
		success: function() {
			$('.compare-block_'+product_id).slideUp('slow', function(){
				$('#compare').load('index.php?route=module/compare #compare > *');
				if ($('#compare .compare-block').length <=1 ) {
				$('#compare').fadeOut('slow') 
					} else {
				$('#compare').fadeIn('slow') 
					}
				});
			
		}
	});
}

function box_slider(item,item_active,pag,pag_active,slider,next_button,prev_button) {
    $('.sliders .item:first-child').addClass('active');
    var length_slider=$(item).length;
    var with_slider=length_slider*$(slider).width();
    $(slider).css('width',with_slider);
    var width_item=$(item).width();
    var myvar = function () {
        var index_item=$(item_active).index()+1;
        var movie_slider=index_item*width_item;
        interval = setInterval(function () {
            if(movie_slider >= width_item*length_slider){
                movie_slider = 0;
            }
            if(index_item >= length_slider){
                index_item = 0;
            }
            $(item).removeClass('active');
            $(pag).removeClass('active');
            $('.sliders .item:eq('+index_item+'),.pag li:eq('+index_item+')').addClass('active');
            $(slider).css('transform','translateX('+-movie_slider+'px)');
            movie_slider +=width_item;
            index_item++;
        },3000);
    };
    myvar();
    $(next_button).click(function () {
        clearInterval(interval);
        var active_item=$(item_active).index();
        var movie_next=(active_item+1)*width_item;
        if(movie_next >= width_item*length_slider){
            movie_next=(width_item*length_slider) - width_item;
        }
        $(slider).css({'transform':'translateX('+-movie_next+'px)'});
        $(item_active).next().addClass('active').prevAll().removeClass('active');
        $(pag_active).next().addClass('active').prevAll().removeClass('active');
        myvar();
    });
    $(prev_button).click(function () {
        clearInterval(interval);
        var active_item=$(item_active).index();
        var movie_prev=(active_item-1)*width_item;
        if(item_active == 0){
            movie_prev = 0;
        }
        $(slider).css({'transform':'translateX('+-movie_prev+'px)'});
        $(item_active).prev().addClass('active').nextAll().removeClass('active');
        $(pag_active).prev().addClass('active').nextAll().removeClass('active');
        myvar();
    });
    var k=0;
    for(k=1; k<=length_slider; k++){
        var data_img=$('.sliders .item:nth-child('+k+') img').attr('src');
        $('.pag').append('<li><a href="#item'+k+'"><img src="'+data_img+'" width="180" height="84"></a></li>');
    }
    $('.pag li:nth-child(1)').addClass('active');
    $(pag).click(function () {
        clearInterval(interval);
        var pag_index=$(this).index();
        $(item).removeClass('active');
        $(pag).removeClass('active');
        $(this).addClass('active');
        $('.sliders .item:eq('+pag_index+')').addClass('active');
        var movie_pag=pag_index * width_item;
        $(slider).css({"transform":"translateX("+-movie_pag+"px)"});
        myvar();
    });
}