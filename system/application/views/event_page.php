<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" 
	"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Events | <? echo $event_title; ?></title> 
	<script>
    	$(function() { 
		$("#accordion > h2").click(function(e) {
		$("#accordion div.pane").hide();
		$('.current').removeClass('current');
		$(this).addClass('current');
		$('.current+div.pane').show();
        });;
	});
    </script>
	
	
</head><!-- HEAD END -->
	<div>
	<? echo $event_body; ?>
		</div>
	
	<div id="footer">
		<? echo $footer; ?>
	</div>	
</body><!-- BODY END -->

</html>