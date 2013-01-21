<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" 
	"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Events | <? echo $event_title; ?></title> 
	<link rel="stylesheet" type="text/css" href="style/page.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="style/grid.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="style/tabs-accordion.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="style/mosaic.css" media="screen" />
	
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.tools.min.js"></script>
	<script type="text/javascript" src="js/mosaic.1.0.1.js"></script>
	<script type="text/javascript" src="js/synapse.js"></script>
	
	
	
</head><!-- HEAD END -->

<body style="background-color:white; background-image:url('images/events.png'); background-repeat: no-repeat;">
	<div id="curtain_left">
    <div><div style="padding-left:28px;padding-top:10px;">
    	<a href="http:schedule.pdf" target="_blank">
      	  <img  src="images/schedule_final.png" alt="Schedule"/>
    	</a>
    </div>
</div>
	</div>
	<div id="curtain_right">
	<div style="padding-left:35px;padding-top:10px;">
    	<a href="http://www.daiict.ac.in" target="new">
      	  <img  src="images/logo.png" alt="DAIICT"/>
    	</a>
    </div>
    </div>

	<div id="header">
	<a href="#item_home" class="panel"><img src="images/curtain buttons/but_Home.png"/></a> &nbsp; 
			<a href="#item_events" class="panel"><img src="images/curtain buttons/but_Events.png"/></a> &nbsp;
			<a href="#item_sponsors" class="panel"><img src="images/curtain buttons/but_Sponsors.png"/></a> &nbsp; 
			<a href="#item_register" class="panel"><img src="images/curtain buttons/but_Register.png"/></a> &nbsp;
			<a href="#item_contact" class="panel"><img src="images/curtain buttons/but_contact.png"/></a>
	</div>
	
	
	<div id="tabs" style="margin-left: 580px; margin-top:50px; width: 600px">
	<h1 style="color:black;font-family:Lobster,cursive;"><? echo $event_title; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="/index.php#item_events"><img src="/images/back_button.png"></a></h1>
	
	</br>
		<div style="margin-top:-15px; margin-left: -10px;">
			<? echo $event_body; ?>
		</div>
	</div>
	
	<div id="footer">
		<? echo $footer; ?>
	</div>	
</body><!-- BODY END -->

</html>