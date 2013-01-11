$(function() {
	//$('#dp').animate({width:'300px'},1500,'easeOutBounce',function(){});
//	$('#navf li').css('width',window.innerWidth/14);
	$('.buttonclose a').on('click', function() {
		$(this).parent().parent().fadeOut(1000);
		$(this).off('click');
		return false;
	});
/* 	$('ul.box_skitter_ul').load('feed.php',
        function() {

        }
    );*/

function customcursor(element, imgUrl) {
    $('body')
        .append('<img style="position:absolute;display:none;cursor:none;" id="mycursor" src="' + imgUrl + '" />');
    element.css('cursor', 'none');
    $(element)
        .hover(function() {
        $('#mycursor')
            .show();
    }, function() {
        $('#mycursor')
            .hide();
    });
    $(element)
        .mousemove(function(e) {
        $('#mycursor')
            .css('left', e.clientX - 1)
            .css('top', e.clientY + 1);
    });
}
//customcursor($('*'),'images/cur.png');
$('#events').css('height',window.innerHeight/1.5);
$('#aboutus').css('height',window.innerHeight/1.5);
$('#pronites').css('height',window.innerHeight/1.75);
$('#sponsors').css('height',window.innerHeight/2);
$('#teasar').css('height',window.innerHeight/3);
$("#jpreButton").click(function(e) {
    $("#page-wrap").css('visibility','visible');
	$("#footer").css('visibility','visible');
	$("#presents").css('visibility','collapse');
});
var ani=1;
$('ul.box_skitter_ul').load('feed.php');
$('#crc').click(function(e) {
	$('.pop').css('visibility','collapse');
    $('#credit').css('visibility','visible');
	$('.pop').animate({height:'80%',top:'5%'},'400','easeOutQuart');
	$('.close').css('visibility','visible');
	ani=0;
});
$("#convener").hover(function(e){
//	$("#condata").css('background','#de4206');
$('#condata').html('<ul class="contactimages"><li><div id="mem"><a href="http://facebook.com/AakashParmar09" target="_blank" ><img id="conimg" src="images/contact/1.png"></a></div></li></ul>');
});
$("#dconvener").hover(function(e){
//$("#condata").css('background','#fd7c2a');
$('#condata').html('<ul class="contactimages"><li><div id="mem"><img id="conimg" src="images/contact/2.png"></div></li></ul>');
});
$("#mentor").hover(function(e){
//$("#condata").css('background','#efb62b');
$('#condata').html('<ul class="contactimages"><li><div id="mem"><a href="http://facebook.com/ashish.soni.777" target="_blank" ><img id="conimg" src="images/contact/3.png"></a></div></li><li><div id="mem"><a href="http://facebook.com/malvaniaviral" target="_blank" ><img id="conimg" src="images/contact/4.png"></a></div></li></ul>');
});
$("#prm").hover(function(e){
//	$("#condata").css('background','#9aca27');
$('#condata').html('<ul class="contactimages"><li><div id="mem"><a href="http://facebook.com/swatmohit" target="_blank" ><img id="conimg" src="images/contact/5.png"></a></div></li><li><div id="mem"><a href="http://facebook.com/manasvi.batra" target="_blank" ><img id="conimg" src="images/contact/6.png"></a></div></li><li><div id="mem"><a href="http://facebook.com/tushar.juneja.18" target="_blank" ><img id="conimg" src="images/contact/13.png"></a></div></li></ul>');

});
$("#sponsorship").hover(function(e){
//	$("#condata").css('background','#3cc16e');
$('#condata').html('<ul class="contactimages"><li><div id="mem"><a href="http://facebook.com/abhishek.panday.311" target="_blank" ><img id="conimg" src="images/contact/7.png"></a></div></li><li><div id="mem"><a href="http://facebook.com/ompatel224" target="_blank" ><img id="conimg" src="images/contact/11.png"></a></div></li></ul>');
});
$("#hospital").hover(function(e){
//	$("#condata").css('background','#169998');
$('#condata').html('<ul class="contactimages"><li><div id="mem"><a href="http://facebook.com/ram.varanasi.1" target="_blank" ><img id="conimg" src="images/contact/8.png"></a></div></li><li><div id="mem"><a href="http://facebook.com/kunal.l.chawla" target="_blank" ><img id="conimg" src="images/contact/14.png"></a></div></li></ul>');
});
$("#eventm").hover(function(e){
//	$("#condata").css('background','#229dee');
$('#condata').html('<ul class="contactimages"><li><div id="mem"><a href="http://facebook.com/ashish.raj.710" target="_blank" ><img id="conimg" src="images/contact/9.png"></a></div></li><li><div id="mem"><a href="http://facebook.com/aviral.varshney.1" target="_blank" ><img id="conimg" src="images/contact/10.png"></a></div></li><li><div id="mem"><a href="http://facebook.com/ankit.patel.779642" target="_blank" ><img id="conimg" src="images/contact/12.png"></a></div></li></ul>');
});

$('#conc').click(function(e) {
	$('.pop').css('visibility','collapse');
    $('#contact').css('visibility','visible');
	$("#convener").trigger('mouseover');
		$('.pop').animate({height:'60%',top:'15%'},'400','easeOutQuart');
	$('.close').css('visibility','visible');
	ani=0;
});
$('#mapc').click(function(e) {
	$('.pop').css('visibility','collapse');
    $('#maps').css('visibility','visible');
		$('.pop').animate({height:'80%',top:'5%'},'400','easeOutQuart');

	$('.close').css('visibility','visible');
	ani=0;
});
$('#gallc').click(function(e) {
	$('.pop').css('visibility','collapse');
    $('#gallery').css('visibility','visible');
		$('.pop').animate({height:'80%',top:'5%'},'400','easeOutQuart');	
	   $('.box_skitter_large').skitter();
//$('.box_skitter_large').skitter();
	$('.close').css('visibility','visible');
	ani=0;
});
$('.close').click(function(e) {
		$('.pop').animate({height:'0%',top:'5%'},'400','easeInCubic',function(e){
	    $('.pop').css('visibility','collapse');			
			});

		$('.close').css('visibility','collapse');
		ani=1;
});
	$('.cleft').mouseover(function(e) {
		if(!ani)
		return;
		if(!e.fromElement)
		{
			clm();
			return ;
		}
		if(e.fromElement.id!='tag'&&e.fromElement.className!='cl'&&e.fromElement.className!='events'&&e.fromElement.className!='aboutus'&&e.fromElement.className!='clt'){clm();}
    });
	function clm(){
	$('.cleft').animate({marginLeft:'2%'},{duration:'200',queue:false});
    $('.crigth').animate({marginRight:'-14%'},{duration:'200',queue:false});}
	$('.crigth').mouseover(function(e) {
		if(!ani)
		return;
		if(!e.fromElement)
		{	crm();
			return ;
		}
		if(e.fromElement.className!='cr'&&e.fromElement.className!='pronites'&&e.fromElement.className!='sponsors'&&e.fromElement.className!='teasar'&&e.fromElement.className!='crt'&&e.fromElement.id!='tag'){
			crm();}
	});
	function crm(){
		    $('.crigth').animate({marginRight:'-10%'},{duration:'200',queue:false});
			$('.cleft').animate({marginLeft:'-2%'},{duration:'200',queue:false});
		}
	function opendoor(){
	$('#events').animate({height:window.innerHeight/1.5},{duration:'200',queue:false});
	$('#aboutus').animate({height:window.innerHeight/1.5},{duration:'200',queue:false});
	$('#pronites').animate({height:window.innerHeight/1.75},{duration:'200',queue:false});
	$('#sponsors').animate({height:window.innerHeight/2},{duration:'200',queue:false});
	$('#teasar').animate({height:window.innerHeight/3},{duration:'200',queue:false});
	$('.crigth').animate({width:"57.75%",marginTop:'-18%'},{duration:'200',queue:false});
	$(".clt,.crt").animate({width:'150px',fontSize:'25pt',paddingTop:"0",height:"40px"},{duration:'200',queue:false});
	$('.cleft').animate({width:"53.75%",marginTop:"-5%"},{duration:'200',queue:false,complete:function(e){
		ani=0;
	        $('.cleft').animate({marginLeft:"-60%"},600,function(){
			$('.cleft').css('visibility','collapse');
			$('.cleft').css('margin-left','0%');
			$('#mainclose,#content').css('visibility','visible');
			});
		$('.crigth').animate({marginRight:"-70%"},600,function(){
			$('.crigth').css('visibility','collapse');
			$('.crigth').css('margin-right','-12%');		
			});
		}});		
		
		
		}
	
	$("#viewsponsor").click(function(e) {
	$('.data,.clo').hide();
	opendoor();	
	$("#sponserdata").fadeIn();
    });
			$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
		/*$('#events,#aboutus,#pronites,#teasar,#sponsors').click(function(e) {
			if(!ani)
			return;
			ani=0;
	//	$('#events').animate({margin:"-10% -55% -9% -20%",height:"800px"});
	//	$('#events').css('position','relative');
	//	$('#events').css('z-index','!important 1000');
	//	$('.clt,.crt').hide();
		$('.cleft').animate({marginLeft:"-60%"},600,function(){
			$('.cleft').css('visibility','collapse');
			$('.cleft').css('margin-left','0%');
			$('#mainclose,#content').css('visibility','visible');
			});
		$('.crigth').animate({marginRight:"-70%"},600,function(){
			$('.crigth').css('visibility','collapse');
			$('.crigth').css('margin-right','-12%');		
			});
    });*/
	$(".clo").click(function(e) {
		//alert();
	$(".clo").hide();
	$('.crigth').animate({width:"57.75%",marginTop:'-18%'},{duration:'400',queue:false});
	$('.cleft').animate({width:"53.75%",marginTop:"-5%"},{duration:'400',queue:false,complete:function(e){ani=1;}});	
//	$(".at").animate({height:"40px",top:"0%"},{duration:'400',queue:false});
	$(".clt,.crt").animate({width:'150px',fontSize:'25pt',paddingTop:"0",height:"40px"},{duration:'200',queue:false});
		$("#events #tag").animate({height:"inherit",top:"60%"},{duration:'400',queue:false});
		$("#aboutus #tag").animate({height:"inherit",top:"30%"},{duration:'400',queue:false});
		$("#pronites #tag").animate({height:"inherit",top:"60%"},{duration:'400',queue:false});
		$("#sponsors #tag").animate({height:"inherit",top:"50%"},{duration:'400',queue:false});
		$("#teasar #tag").animate({height:"inherit",top:"15%"},{duration:'400',queue:false});
		$('.data,.rsd').hide();
	$('#events').animate({height:window.innerHeight/1.5});
	$('#aboutus').animate({height:window.innerHeight/1.5});
	$('#pronites').animate({height:window.innerHeight/1.75});
	$('#sponsors').animate({height:window.innerHeight/2});
	$('#teasar').animate({height:window.innerHeight/3});
	
//	$(".clt,.crt").animate({height:"100%",width:"30%"},{duration:'400',queue:false});	
		
    });
	$("#events").click(function(e) {
		if(!ani)
		return;
		ani=0;
		$("#events").animate({height:window.innerHeight});
		$('.crigth').animate({width:"23.75%"},{duration:'400',queue:false});
		$('.cleft').animate({width:"87.75%"},{duration:'400',queue:false,complete:function(e){
		$("#events #tag").animate({height:"100%",top:"0%"},{duration:'400',queue:false});
		$("#events #ftag").animate({height:"100%",width:"30%"},{duration:'400',queue:false});	
		$(".v").hide();		
		$("#events .clo").show();
		$("#edata").show();
		$("#ed").show();
			}});
//		$("#events #ftag").animate({height:"100%"},{duration:'400',queue:false});
	//	$("#events #tag").animate({height:"100%",top:"0%"},{duration:'400',queue:false});

    });
	$("#aboutus").click(function(e) {
		if(!ani)
		return;
	ani=0;
		$('.crigth').animate({width:"23.75%"},{duration:'400',queue:false});
		$("#aboutus").animate({height:window.innerHeight},{duration:'400',queue:false});
		$(".cleft").animate({marginTop:'-22%'},{duration:'400',queue:false});
	$('.cleft').animate({width:"87.75%"},{duration:'400',queue:false,complete:function(e){
		$("#aboutus #ftag").animate({height:"100%",width:"30%",paddingTop:"2%"},{duration:'400',queue:false});	
		$("#aboutus #tag").animate({height:"100%",top:"0%"},{duration:'400',queue:false});
		$(".v").hide();
		$('#ad').show();
		$("#asd").show();
		$("#aboutus .clo").show();
		}
	});
	});
	$("#pronites").click(function(e) {
		if(!ani)
		return;
		ani=0;
		$('.crigth').animate({width:"93.75%"},{duration:'400',queue:false});
		$("#pronites").animate({height:window.innerHeight},{duration:'400',queue:false});
		$(".crigth").animate({marginTop:'0%'},{duration:'400',queue:false});
		$('.cleft').animate({width:"17.75%"},{duration:'400',queue:false,complete:function(e){
		$("#pronites #tag").animate({height:"100%",top:"0%"},{duration:'400',queue:false});
		$("#pronites #ftag").animate({height:"100%",width:"30%",paddingTop:"10%"},{duration:'400',queue:false});	
		$(".v").hide();	
		$('#pd').show();	
		$("#pnd").show();
		$("#pronites .clo").show();
		}});
	});
	$("#sponsors").click(function(e) {
		if(!ani)
		return;
		ani=0;
		$('.crigth').animate({width:"93.75%"},{duration:'400',queue:false});
		$("#sponsors").animate({height:window.innerHeight},{duration:'400',queue:false});
		$(".crigth").animate({marginTop:'-20%'},{duration:'400',queue:false});
		$('.cleft').animate({width:"17.75%"},{duration:'400',queue:false,complete:function(e){
		$("#sponsors #tag").animate({height:"100%",top:"0%"},{duration:'400',queue:false});
		$("#sponsors #ftag").animate({height:"100%",width:"30%",paddingTop:"7%"},{duration:'400',queue:false});	
		$(".v").hide();		
		$("#sponsors .clo").show();
		$("#sd").show();
		}});
	});
	$("#teasar").click(function(e) {
		if(!ani)
		return;
		ani=0;
		$('.crigth').animate({width:"93.75%"},{duration:'400',queue:false});
		$("#teasar").animate({height:window.innerHeight},{duration:'400',queue:false});
		$(".crigth").animate({marginTop:'-40%'},{duration:'400',queue:false});
		$('.cleft').animate({width:"17.75%"},{duration:'400',queue:false,complete:function(e){
		$("#teasar #tag").animate({height:"100%",top:"0%"},{duration:'400',queue:false});
		$("#teasar #ftag").animate({height:"100%",width:"30%"},{duration:'400',queue:false});	
		$(".v").hide();
		$("#teasar .clo").show();
		}});
    });
	$("ul#eventlabels li").click(function(e) {
			$('.data,.clo').hide();
			opendoor();	
	$("#eventdata").fadeIn();
    });
	/*$("ul#proniteslabels li").click(function(e) {
        	$('.data,.clo').hide();
			opendoor();	
	$("#prodata").fadeIn();
    });*/
	$("#ram").mouseover(function(e) {
       $("#pnd").html("<p>\"Lights, camera, fashion!! Heads turn when they walk. Catch a glimpse of what\'s new in the glitzy world of fashion as the hottest of models catwalk to the beats of music, oomph and charisma personified. The night will leave you enthralled as the atmosphere is one of beauty, excitement, and most importantly Fashion!!\"</p><br>Date :<br>Theme :<br><br>Co-ordintators – Yash Kumbhani - +91-9799915353<br>Shondhi singhal - +91-9687614655<br>Divy Thakkar - +91-9173703535<br>Shivani Thakkar - <br>Sakshi Gupta - +91-9737538623");
    });
	$("#rag").mouseover(function(e) {
       $("#pnd").html("<p>Figure a state of limb-numbing and mental frenzy caused by the cacophonous wall of sound combined with hypersonic double bass rhythms and your heart thumping with the bassline constantly urging you to mosh and fu** your own shadow from behind.</p><br>Get high with __ performing in Synapse 2013.<br>Date : <br>Co-Ordinators :<br> ");
    });
	$("#cyn").mouseover(function(e) {
       $("#pnd").html("<p>Stars brighten up the night. But the kind cynosure offer can set the night ablaze. The celebrity walks up to the stage amidst loud cheers from the crowd. The next few hours of the night will leave you mesmerized, for sure . The Raghu Dixit Project, Agnee , Indian Ocean , Aditya Narayan , Tochi Raina and still counting…</p><br>Date : <br>Co-Ordinators : <br>");
    });
	$("#yttrailer").click(function(e) {
		$("#mainclose").css("visibility",'visible');
		$("#content").css("visibility",'visible');
		$("#trail").show();
		$("#player").css('width','640px');
					$(".v").hide();
		$('.cleft,.crigth').animate({opacity:'0.1'});
		//$('#sponsors').css('height',window.innerHeight/2);
		//$("#teasar").animate({height:window.innerHeight/3},200,'linear',function(e){
		
		//	});
		/*$('.crigth').animate({width:"93.75%"},{duration:'400',queue:false});
		$("#teasar").animate({height:window.innerHeight},{duration:'400',queue:false});
		$(".crigth").animate({marginTop:'-40%'},{duration:'400',queue:false});
		$('.cleft').animate({width:"17.75%"},{duration:'400',queue:false,complete:function(e){
		$("#teasar #tag").animate({height:"100%",top:"0%"},{duration:'400',queue:false});
		$("#teasar #ftag").animate({height:"100%",width:"30%"},{duration:'400',queue:false});	
		$(".v").hide();
		$("#teasar .clo").show();
		}});*/
	});
	$('#mainclose').click(function(e) {
		javascript:stopVideo();
		$("#player").width(0);
		$("#trail").hide();
		$('.clo').trigger('click');
		$('.cleft').css('margin-left','-60%');
		$('.cleft').css('visibility','visible');
		$('.cleft,.crigth').animate({opacity:'1'});
        $('.cleft').animate({marginLeft:"0%"},600,function(){});
		$('.crigth').css('margin-right','-70%');		
		$('.crigth').css('visibility','visible');
		$("#events #tag").animate({height:"inherit",top:"60%"},{duration:'400',queue:false});
		$("#aboutus #tag").animate({height:"inherit",top:"30%"},{duration:'400',queue:false});
		$("#pronites #tag").animate({height:"inherit",top:"60%"},{duration:'400',queue:false});
		$("#sponsors #tag").animate({height:"inherit",top:"50%"},{duration:'400',queue:false});
		$("#teasar #tag").animate({height:"inherit",top:"15%"},{duration:'400',queue:false});
		$(".clt,.crt").animate({width:'150px',height:'40px',fontSize:'25pt'},{duration:'200',queue:false});
		$('.crigth').animate({marginRight:"-12%"},600,function(){});
		$('#mainclose,#content').css('visibility','collapse');
		$('.indata').hide();
		ani=1;
    });
	$('#events').mouseover(function(e) {	
		if(!ani)
		return;
		$('*').clearQueue();
		$(".v").fadeOut();
		$(".clt,.crt").animate({width:'150px',height:'40px',fontSize:'25pt'},{duration:'200',queue:false});
		$('#events').animate({height:window.innerHeight/1.2},'200');		
		$('#aboutus').animate({height:window.innerHeight/1.8},'200');
      	$('#sponsors').animate({height:window.innerHeight/1.75},'200');
		$('#pronites').animate({height:window.innerHeight/2},'200');
		$('#teasar').animate({height:window.innerHeight/3},'200');
		$('#events #ftag').animate({width:'170px',height:'60px',fontSize:'35pt'},{duration:'200',queue:false,complete:function(e){
		$("#events .v").fadeIn('fast');
		}});
		
    });
	
		$('#aboutus').mouseover(function(e) {
		if(!ani)
		return;
		$('*').clearQueue();	
		$(".v").fadeOut();		
		$(".clt,.crt").animate({width:'150px',height:'40px',fontSize:'25pt'},{duration:'200',queue:false});
		$('#events').animate({height:window.innerHeight/2},'200');		
		$('#aboutus').animate({height:window.innerHeight/1},'200');
      	$('#sponsors').animate({height:window.innerHeight/1.75},'200');
		$('#pronites').animate({height:window.innerHeight/2},'200');
		$('#teasar').animate({height:window.innerHeight/3},'200');
		$('#aboutus #ftag').animate({width:'170px',height:'60px',fontSize:'35pt'},{duration:'200',queue:false,complete:function(e){
		$("#aboutus .v").fadeIn('fast');
		}});
	 });
	$('#pronites').mouseover(function(e) {	
		if(!ani)
		return;
		$('*').clearQueue();		
		$(".v").fadeOut();		
		$(".clt,.crt").animate({width:'150px',height:'40px',fontSize:'25pt'},{duration:'200',queue:false});
		$('#events').animate({height:window.innerHeight/1.5},'200');		
		$('#aboutus').animate({height:window.innerHeight/1.5},'200');
      	$('#sponsors').animate({height:window.innerHeight/2.45},'200');
		$('#pronites').animate({height:window.innerHeight/1.3},'200');
		$('#teasar').animate({height:window.innerHeight/3},'200');
		$('#pronites #ftag').animate({width:'170px',height:'60px',fontSize:'35pt'},{duration:'200',queue:false,complete:function(e){
		$("#pronites .v").fadeIn('fast');
		}});
	});
		
	$('#sponsors').mouseover(function(e) {	
		if(!ani)
		return;
		$('*').clearQueue();		
		$(".v").fadeOut();		
		$(".clt,.crt").animate({width:'150px',height:'40px',fontSize:'25pt'},{duration:'200',queue:false});
		$('#events').animate({height:window.innerHeight/1.5},'200');		
		$('#aboutus').animate({height:window.innerHeight/1.5},'200');
      	$('#sponsors').animate({height:window.innerHeight/1.55},'200');
		$('#pronites').animate({height:window.innerHeight/2.2},'200');
		$('#teasar').animate({height:window.innerHeight/3},'200');
		$('#sponsors #ftag').animate({width:'170px',height:'60px',fontSize:'35pt'},{duration:'200',queue:false,complete:function(e){
		$("#sponsors .v").fadeIn('fast');
		}});
    });
	$('#teasar').mouseover(function(e) {
		if(!ani)
		return;
		$('*').clearQueue();		
		$(".v").fadeOut();		
		$(".clt,.crt").animate({width:'150px',height:'40px',fontSize:'25pt'},{duration:'200',queue:false});
		$('#events').animate({height:window.innerHeight/1.5},'200');		
		$('#aboutus').animate({height:window.innerHeight/1.5},'200');
      	$('#sponsors').animate({height:window.innerHeight/2.25},'200');
		$('#pronites').animate({height:window.innerHeight/2},'200');
		$('#teasar').animate({height:window.innerHeight/2.5},'200');
		$('#teasar #ftag').animate({width:'200px',height:'60px',fontSize:'30pt'},{duration:'200',queue:false,complete:function(e){
		$("#teasar .v").fadeIn('fast');
		}});
	});
});