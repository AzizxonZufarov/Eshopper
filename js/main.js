  $(document).ready(function(){
function cats(res){
  	$(".brands-item").fadeOut(500);
  	$(".cats-item").html(res).hide().fadeIn(500);
}


$(".cats").click(function(e){
	e.preventDefault();
	var id = $(this).data("id");
	$.ajax({
		type:"GET",
		url:"cats.php",
		data:{id: id},
		success:function(res){
     	cats(res);
		},
		error:function(){
		}
			});
	});

});





  $(document).ready(function(){
	function brands(res){
  $(".cats-item").fadeOut(500);
	$(".brands-item").html(res).hide().fadeIn(500);
}
$(".brands").click(function(e){
	e.preventDefault();
	var id = $(this).data("id");
	$.ajax({
		type:"GET",
		url:"brands.php",
		data:{id: id},
		success:function(res){
     	brands(res);
		},
		error:function(){
		}
			});
	});
});
function message(message){

	    $('.signup-form').fadeOut(800);
	    $('.or').fadeOut(800);
   		$('.message').html("Вы зарегистрированы! Молодец! Теперь авторизуйтесь");
};

$(".submit").click(function(e){

	e.preventDefault();
	var name = $('.name').val();
	var email = $('.email').val();
	var password = $('.password').val();

	$.ajax({
		type:"POST",
		url:"adduser.php",
		data:{name: name, email:email, password:password},
		success:function(res){
			message(res);
		},
		error:function(){


		}
			});

	});

	/*auth*/
	function cablink(cablink){
				$('.signup-form').fadeOut(800);
				$('.or').fadeOut(800);
		    $('.login-form').fadeOut(800);
		    $('.message').fadeOut(800);
	   		$('.cablink').html("Теперь можете перейти в кабинет по этой ссылке");
	};

	$(".cabenter").click(function(e){

		e.preventDefault();
		var checkemail = $('.checkemail').val();
		var checkpassword = $('.checkpassword').val();
		var id =
		$.ajax({
			url:"auth.php",
			data:{email:checkemail, password:checkpassword},
			type:"POST",
			success:function(res){
				cablink(res);
//				window.location = "cab.php";
			},
			error:function(){


			}
				});

		});





    $('#sl2').slider();

     var RGBChange = function() {
    	 $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
     };

    /*scroll to top*/

    $(document).ready(function(){
     $(function () {
    	 $.scrollUp({
    				 scrollName: 'scrollUp', // Element ID
    				 scrollDistance: 300, // Distance from top/bottom before showing element (px)
    				 scrollFrom: 'top', // 'top' or 'bottom'
    				 scrollSpeed: 300, // Speed back to top (ms)
    				 easingType: 'linear', // Scroll to top easing (see http://easings.net/)
    				 animation: 'fade', // Fade, slide, none
    				 animationSpeed: 200, // Animation in speed (ms)
    				 scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
    				 //scrollTarget: false, // Set a custom target element for scrolling to the top
    				 scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
    				 scrollTitle: false, // Set a custom <a> title if required.
    				 scrollImg: false, // Set true to use image
    				 activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    				 zIndex: 2147483647 // Z-Index for the overlay
    	 });
     });
    });






/*function cart(cart){

	$('.open-popup').click(function(e) {
    e.preventDefault();
    $('.popup-bg').fadeIn(800);
    $('.popup').html(cart);
    $('html').addClass('no-scroll');
});

$('.close-popup').click(function() {
    $('.popup-bg').fadeOut(800);
    $('html').removeClass('no-scroll');
    $('a #scrollUp').removeId('scrollUp');

});

}

$(".add-to-cart").click(function(e){

	e.preventDefault();
	var id = $(this).data("id");
	$.ajax({


		url:"adcart.php",
		data:{id: id},
		type:"GET",
		success:function(res){

			cart(res);
		},
		error:function(){



		}
			});

	});
*/
