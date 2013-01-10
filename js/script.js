$(document).ready( function() {
	var timer;	//timer for splash screen
	
	//navigation swap
	$('#navigation a').on('click', function() {
		if( !$(this).hasClass('btn-main') ) {
			$('#navigation a')
			.toggleClass('btn-secondary')
			.toggleClass('btn-main');
			
			var tar = $(this).attr('href');
			$('.holder').fadeOut(500, function() {
				$(tar).fadeIn(500);
			});
		}
		return false;
	});
	$('#set2').hide();
	$('#header').css('top', '-100px');
	$('#footer').css('bottom', '-100px');
	$('#wrapper').hide();

	
	//calling jPreLoader
	$('body').jpreLoader({
		splashID: "#jSplash",
		loaderVPos: '70%',
		autoClose: false,
		closeBtnText: "Enter?",
		splashFunction: function() {  
			//passing Splash Screen script to jPreLoader
			$('#jSplash').children('section').not('.selected').hide();
			$('#jSplash').hide().fadeIn(800);
			
			timer = setInterval(function() {
				splashRotator();
			}, 4000);
		}
	}, function() {	//callback function
		clearInterval(timer);
		$('#footer')
		.animate({"bottom":0}, 500);
		$('#header')
		.animate({"top":0}, 800, function() {
			$('#wrapper').fadeIn(1000);
		});
	});
	$("#jpreButton").click(function(e) {
		$("#presents").fadeOut('slow','linear',function(){
	//$("#page-wrap").fadeOut('fast');
	
			$('.cleft').css('margin-left','-60%');
		$('.crigth').css('margin-right','-70%');		
		$("#page-wrap").css('visibility','visible');			
	$("#presents").css('visibility','collapse');	
        $('.cleft').animate({marginLeft:"0%"},600,function(){});
		$('.crigth').css('visibility','visible');
		$('.crigth').animate({marginRight:"-12%"},600,function(){});
			});
    
//	$("#page-wrap").fadeIn('fast');
	$("#footer").css('visibility','visible');
	
});

	//create splash screen animation
	function splashRotator(){
		var cur = $('#jSplash').children('.selected');
		var next = $(cur).next();
		
		if($(next).length != 0) {
			$(next).addClass('selected');
		} else {
			$('#jSplash').children('section:first-child').addClass('selected');
			next = $('#jSplash').children('section:first-child');
		}
			
		$(cur).removeClass('selected').fadeOut(800, function() {
			$(next).fadeIn(800);
		});
	}
});