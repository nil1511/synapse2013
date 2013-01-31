$(function() {
	//$('#dp').animate({width:'300px'},1500,'easeOutBounce',function(){});
//	$('#navf li').css('width',window.innerWidth/14);
		$(".cont,.eventpop").hide();
	$('.buttonclose a').on('click', function() {
		$(this).parent().parent().fadeOut(1000);
		$(this).off('click');
		return false;
		
	});

function c(t){
	$(document).unbind('keydown');
		$(document).keydown(function(e) {
        if(e.keyCode==27)
		{
		if(t=='pop')
		$('.close').trigger('click');
		else if(t=='main')
		$('#mainclose').trigger('click');
		else if(t=='cl')
		$('.clo').trigger('click');
		}
    });
}
//customcursor($('*'),'images/cur.png');
$('#sp13').css('height',window.innerHeight);
$('#sp13').css('width',window.innerWidth);
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
$('ul.box_skitter_ul').load('feed.php',function(e){
//	   $('.box_skitter_large').skitter();
		$('.box_skitter_large').skitter({label: false,is_paused:true});

	});
	

$('#crc').click(function(e) {
	//clo();
	c('pop');
	$("#page-wrap").css('opacity','0.5');
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
	//clo();
		c('pop');
		$("#page-wrap").css('opacity','0.5');
	$('.pop').css('visibility','collapse');
    $('#contact').css('visibility','visible');
	$("#convener").trigger('mouseover');
		$('.pop').animate({height:'55%',top:'20%'},'400','easeOutQuart');
	$('.close').css('visibility','visible');
	ani=0;
});
$('#mapc').click(function(e) {
	//clo();
		c('pop');
	$("#page-wrap").css('opacity','0.5');
	$('.pop').css('visibility','collapse');
    $('#maps').css('visibility','visible');
	$('.pop').animate({height:'80%',top:'5%'},'400','easeOutQuart');
	$('.close').css('visibility','visible');
	ani=0;
});
$('#gallc').click(function(e) {
	//clo();
		c('pop');
			$("#page-wrap").css('opacity','0.5');

	$('.pop').css('visibility','collapse');
    $('#gallery').css('visibility','visible');
		$('.pop').animate({height:'90%',top:'3%'},'400','easeOutQuart');	
	$('.close').css('visibility','visible');
	ani=0;
});
$('.close').click(function(e) {
	clo();
	$("#page-wrap").css('opacity','1');
		$('.pop').animate({height:'0%',top:'5%'},'400','easeInCubic',function(e){
	    $('.pop').css('visibility','collapse');			
			});
//		$('.box_skitter_large').skitter({is_paused:true});
		$('.close').css('visibility','collapse');
//		console.log(e);
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
	
	$("#viewsponsor12").click(function(e) {
	c('main');
	$('.data,.clo').hide();
	opendoor();	
	$("#sponserdata12").fadeIn();
    });
	$("#viewsponsor13").click(function(e) {
	c('main');
	$('.data,.clo').hide();
	opendoor();	
	$("#sponserdata13").fadeIn();
    });
/*	$("#register").click(function(e) {
	c('main');
	$('.data,.clo').hide();
	opendoor();	
	$("#register").fadeIn();
        
    });*/
	
	$("#viewyouth").click(function(e) {
	$('.data,.clo').hide();
	opendoor();	
	window.open('http://synapse.daiict.ac.in/youthrun/','_self');
	//$("#yrun").fadeIn();
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
	function clo(){
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
	return;
		}
	
	$(".clo").click(function(e) {
		//alert();
	clo();
//	$(".clt,.crt").animate({height:"100%",width:"30%"},{duration:'400',queue:false});	
		
    });
	$("#events").click(function(e) {
		if(!ani)
		return;
		ani=0;
		c('cl');
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
		c('cl');
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
		c('cl');
		$('.crigth').animate({width:"93.75%"},{duration:'400',queue:false});
		$("#pronites").animate({height:window.innerHeight},{duration:'400',queue:false});
		$(".crigth").animate({marginTop:'0%'},{duration:'400',queue:false});
		$('.cleft').animate({width:"17.75%"},{duration:'400',queue:false,complete:function(e){
		$("#pronites #tag").animate({height:"100%",top:"0%"},{duration:'400',queue:false});
		$("#pronites #ftag").animate({height:"100%",width:"30%",paddingTop:"10%"},{duration:'400',queue:false});	
		$(".v").hide();	
		$('#pd').show();	
		//$("#pnd").show();
		$("#pronites .clo").show();
		}});
	});
	$("#sponsors").click(function(e) {
		if(!ani)
		return;
		ani=0;
		c('cl');
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
		c('cl');
		$('.crigth').animate({width:"93.75%"},{duration:'400',queue:false});
		$("#teasar").animate({height:window.innerHeight},{duration:'400',queue:false});
		$(".crigth").animate({marginTop:'-40%'},{duration:'400',queue:false});
		$('.cleft').animate({width:"17.75%"},{duration:'400',queue:false,complete:function(e){
		$("#teasar #tag").animate({height:"100%",top:"0%"},{duration:'400',queue:false});
		$("#teasar #ftag").animate({height:"100%",width:"30%"},{duration:'400',queue:false});	
		$(".v").hide();
		$("#teasar .clo").show();
		$("#yd").show();
		}});
    });
	$("ul#eventlabels li").click(function(e) {
			//console.log(e.currentTarget.innerHTML);
			$('.data,.clo').hide();
			opendoor();	
			switch (e.currentTarget.innerHTML){
			case "Cultural":
			$("#cult").trigger('click');
			$("#eventdata").fadeIn();
			break;
			
			case "Technical":	
						$("#tech").trigger('click');
						$("#eventdata").fadeIn();
			break;
			
			case "Online":			
						$("#work").trigger('click');
						$("#eventdata").fadeIn();
			break;

			case "Workshop":				
						$("#online").trigger('click');
						$("#eventdata").fadeIn();

			break;
			case "Register":	

							$('#reg').attr('src', $('#reg').attr('src'));
						$("#register").trigger('click');
			break;

			}
	
    });
	/*$("ul#proniteslabels li").click(function(e) {
        	$('.data,.clo').hide();
			opendoor();	
	$("#prodata").fadeIn();
    });*/
	$("#ram").mouseover(function(e) {
		$("#pnd").show();
       $("#pnd").html("<p>\"Lights, camera, fashion!! Heads turn when they walk. Catch a glimpse of what\'s new in the glitzy world of fashion as the hottest of models catwalk to the beats of music, oomph and charisma personified. The night will leave you enthralled as the atmosphere is one of beauty, excitement, and most importantly Fashion!!\"</p><br>Date :<br>Theme :<br><br>Co-ordintators – Yash Kumbhani - +91-9799915353<br>Shondhi singhal - +91-9687614655<br>Divy Thakkar - 9173703535<br>Shivani Thakkar - 9426204255<br>Utkarsh Bhatla - 8905846430");
    });
	$("#rag").mouseover(function(e) {
				$("#pnd").show();
       $("#pnd").html("<p>Figure a state of limb-numbing and mental frenzy caused by the cacophonous wall of sound combined with hypersonic double bass rhythms and your heart thumping with the bassline constantly urging you to mosh and fu** your own shadow from behind.</p><br>Get high with __ performing in Synapse 2013.<br>Date : <br>Co-Ordinators :<br>Kaushal Parmar <br>Tapan Kumar<br>Moxad Thakar<br>Ankit Sharma ");
    });
	$("#cyn").mouseover(function(e) {		$("#pnd").show();
       $("#pnd").html("<p>Stars brighten up the night. But the kind cynosure offer can set the night ablaze. The celebrity walks up to the stage amidst loud cheers from the crowd. The next few hours of the night will leave you mesmerized, for sure . The Raghu Dixit Project, Agnee , Indian Ocean , Aditya Narayan , Tochi Raina and still counting…</p><br>Date : <br>Co-Ordinators :<br>Himanshu Singhal - 8469281057<br>Bansari rao<br>");
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
		try{
		javascript:stopVideo();}
		catch (error){
			}
		$("#player").width(0);
		$("#trail").hide();
		clo();
		$('.close').trigger('click');
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
	//	console.log(e.relatedTarget)
		$('*').clearQueue();
		$(".clt,.crt").animate({width:'150px',height:'1em',fontSize:'20pt'},{duration:'200',queue:false});
		$('#events').animate({height:window.innerHeight/1.2},{duration:'100',queue:false});		
		$('#aboutus').animate({height:window.innerHeight/1.8},{duration:'100',queue:false});
      	$('#sponsors').animate({height:window.innerHeight/1.75},{duration:'100',queue:false});
		$('#pronites').animate({height:window.innerHeight/2},{duration:'100',queue:false});
		$('#teasar').animate({height:window.innerHeight/3},{duration:'100',queue:false});
		$('#events #ftag').animate({width:'170px',height:'1.75em',fontSize:'35pt'},{duration:'100',queue:false,complete:function(e1){
		if(e.currentTarget.id=='events'&&$("#events .v").is(":hidden")){
		$(".v").hide();
		$("#events .v").show('fast');}
		}});
		
    });
	
		$('#aboutus').mouseover(function(e) {
		if(!ani)
		return;
		$('*').clearQueue();
		$(".clt,.crt").animate({width:'150px',height:'1em',fontSize:'20pt'},{duration:'200',queue:false});
		$('#events').animate({height:window.innerHeight/2},{duration:'100',queue:false});		
		$('#aboutus').animate({height:window.innerHeight/1},{duration:'100',queue:false});
      	$('#sponsors').animate({height:window.innerHeight/1.75},{duration:'100',queue:false});
		$('#pronites').animate({height:window.innerHeight/2},{duration:'100',queue:false});
		$('#teasar').animate({height:window.innerHeight/3},{duration:'100',queue:false});
		$('#aboutus #ftag').animate({width:'170px',height:'1.75em',fontSize:'35pt'},{duration:'100',queue:false,complete:function(e1){
//		console.log(e.currentTarget.id);
		if(e.currentTarget.id=='aboutus'&&$("#aboutus .v").is(":hidden")){
		$(".v").hide();
		$("#aboutus .v").show('fast');
		}
		}});
	 });
	$('#pronites').mouseover(function(e) {	
		if(!ani)
		return;		
		$('*').clearQueue();
		$(".clt,.crt").animate({width:'150px',height:'1em',fontSize:'20pt'},{duration:'200',queue:false});
		$('#events').animate({height:window.innerHeight/1.5},{duration:'100',queue:false});		
		$('#aboutus').animate({height:window.innerHeight/1.5},{duration:'100',queue:false});
      	$('#sponsors').animate({height:window.innerHeight/2.45},{duration:'100',queue:false});
		$('#pronites').animate({height:window.innerHeight/1.3},{duration:'100',queue:false});
		$('#teasar').animate({height:window.innerHeight/3},{duration:'100',queue:false});
		$('#pronites #ftag').animate({width:'170px',height:'1.75em',fontSize:'35pt'},{duration:'100',queue:false,complete:function(e1){
//		$("#pronites .v").show('fast');
		if(e.currentTarget.id=='pronites'&&$("#pronites .v").is(":hidden")){
		$(".v").hide();
		$("#pronites .v").show('fast');}
		}});
	});
		
	$('#sponsors').mouseover(function(e) {	
		if(!ani)
		return;		
		$('*').clearQueue();
		$(".clt,.crt").animate({width:'150px',height:'1em',fontSize:'20pt'},{duration:'200',queue:false});
		$('#events').animate({height:window.innerHeight/1.5},{duration:'100',queue:false});		
		$('#aboutus').animate({height:window.innerHeight/1.5},{duration:'100',queue:false});
      	$('#sponsors').animate({height:window.innerHeight/1.55},{duration:'100',queue:false});
		$('#pronites').animate({height:window.innerHeight/2.2},{duration:'100',queue:false});
		$('#teasar').animate({height:window.innerHeight/3},{duration:'100',queue:false});
		$('#sponsors #ftag').animate({width:'170px',height:'1.75em',fontSize:'35pt'},{duration:'100',queue:false,complete:function(e1){
		if(e.currentTarget.id=='sponsors'&&$("#sponsors .v").is(":hidden")){
		$(".v").hide();
		$("#sponsors .v").show('fast');}
		}});
    });
	$('#teasar').mouseover(function(e) {
		if(!ani)
		return;
		$(".v").hide(5,function(){
		$('*').clearQueue();
		});		
		$(".clt,.crt").animate({width:'150px',height:'1em',fontSize:'20pt'},{duration:'200',queue:false});
		$('#events').animate({height:window.innerHeight/1.5},{duration:'100',queue:false});		
		$('#aboutus').animate({height:window.innerHeight/1.5},{duration:'100',queue:false});
      	$('#sponsors').animate({height:window.innerHeight/2.25},{duration:'100',queue:false});
		$('#pronites').animate({height:window.innerHeight/2},{duration:'100',queue:false});
		$('#teasar').animate({height:window.innerHeight/2.5},{duration:'100',queue:false});
		$('#teasar #ftag').animate({width:'200px',height:'1.75em',fontSize:'28pt'},{duration:'100',queue:false,complete:function(e1){
		if(e.currentTarget.id=='teasar'&&$("#teasar .v").is(":hidden")){
		$(".v").hide();
		$("#teasar .v").show('fast');}
		}});
	});
	$('#tech,#work,#online,#cult').css('width',window.innerWidth*7/100);
	$("#epc").click(function(e) {
		$('.overlay').fadeOut();
	$('#cult .eventpop').fadeOut();
    });
	$('#ept').click(function(e) {
				$('.overlay').fadeOut();
        	$('#tech .eventpop').fadeOut();
    });
	$('#epo').click(function(e) {
				$('.overlay').fadeOut();
        	$('#online .eventpop').fadeOut();
    });
	$('#epw').click(function(e) {
				$('.overlay').fadeOut();
        	$('#work .eventpop').fadeOut();
    });
    $("#cult").click(function(e) {
       // $("#cult .cont").show();
	   if($("#cult .cont").width()!=0)
	   return;
	   $('.cont').width(0).hide();
	   var m=window.innerWidth*69.5/100;
	   $("#cult").animate({left:'0px'});
		$("#tech,#work,#online").animate({left:m+'px'},'fast','linear',function(){
		$("#cult .cont").animate({width:m+'px',marginLeft:window.innerWidth*7/100}).show();	
		});
//		$("#cult .cont").load('c.php?t=events',function(e){
				$(".cnam").click(function(e) {
					var a=e.currentTarget.innerHTML;
					console.log(a.search('<label'));
					if(a.search('<label')!=-1)
					a=a.substr(0,a.search('<label'));
							$('#cult .en').html(a);
					var b=a.replace(/ /g,"");		
							b=b.toLowerCase();
							b=(b=='naivète')?'naivete':b;
							$("#cult .d").html('<div style="text-align:center;font-size:1.5em;padding:5% 0;">Loading...');
							$("#cult .d").load('index.php/event/'+b);	
							$(".overlay").show();							
							$("#cult .eventpop").show();
							 });			
			});
  //  });
	
	$("#tech").click(function(e) {
       // $("#cult .cont").show();
	   if($("#tech .cont").width()!=0)
	   return;
	   $('.cont').width(0).hide();
	   var m=window.innerWidth*69.5/100;
	   	   $("#cult,#tech").animate({left:'0px'});
		$("#work,#online").animate({left:m+'px'},'fast','linear',function(){
		$("#tech .cont").animate({width:m+'px',marginLeft:window.innerWidth*7/100}).show();	
		});
//		$("#tech .cont").load('t.php?t=events',function(e){
				$(".tnam").click(function(e) {
					var a=e.currentTarget.innerHTML;
					if(a.search('<label')!=-1)
					a=a.substr(0,a.search('<label'));
						$('#tech .en').html(a);
							a=a.replace(/ /g,"");
							if(a=='Inc'){
							window.open('http://synapse.daiict.ac.in/inc2013/','_blank');
							return;
							}
							if(a=='Rekriti'){
							window.open('http://synapse.daiict.ac.in/rekriti/','_blank');
							return;
							}

					var b=a.replace(/ /g,"");		
							b=b.toLowerCase();
							b=(b=='ageofempires')?'aoe':b;
							$("#tech .d").html('<div style="text-align:center;font-size:1.5em;padding:5% 0;">Loading...');
							$("#tech .d").load('index.php/event/'+b);	
							$(".overlay").show();							
							$("#tech .eventpop").show();
							 });			
	//		});


    });
	
	$("#work").click(function(e) {
       // $("#cult .cont").show();
	   if($("#work .cont").width()!=0)
	   return;
	   $('.cont').width(0).hide();
	   	   var m=window.innerWidth*69.5/100;
	   	   $("#cult,#tech,#work").animate({left:'0px'});
		$("#online").animate({left:m+'px'},'fast','linear',function(){
		$("#work .cont").animate({width:m+'px',marginLeft:window.innerWidth*7/100}).show();	
		});
				$(".onam").click(function(e) {
					var a=e.currentTarget.innerHTML;
										if(a.search('<label')!=-1)
							a=a.substr(0,a.search('<label'));
							var c =a;
							a=a.replace(/ /g,"");
							if(a=='TeamTwister'){
							window.open('http://synapse.daiict.ac.in/teamtwister/','_blank');
							return;
							}
							var b=a.replace(/ /g,"");	
							$('#work .en').html(c);
							b=b.toLowerCase();
							$("#work .d").html('<div style="text-align:center;font-size:1.5em;padding:5% 0;">Loading...');
							$("#work .d").load('index.php/event/'+b);	
							$(".overlay").show();							
							$("#work .eventpop").show();
							 });			
	//		});

    });
	$("#online").click(function(e) {
   // $("#cult .cont").show();
   	   if($("#online .cont").width()!=0)
	   return;
	   $('.cont').width(0).hide();
	   	   var m=window.innerWidth*69.5/100;
	   $("#cult,#tech,#work,#online").animate({left:'0px'},'fast','linear',function(){
		$("#online .cont").animate({width:m+'px',marginLeft:window.innerWidth*7/100}).show();			   
		   });
//		$("#online .cont").load('w.php?t=events',function(e){
		$(".wnam").click(function(e) {
							var a=e.currentTarget.innerHTML;
							if(a.search('<label')!=-1)
							a=a.substr(0,a.search('<label'));
							var b=a.replace(/ /g,"");		
							$('#online .en').html(a);
							b=b.toLowerCase();
							$("#online .d").html('<div style="text-align:center;font-size:1.5em;padding:5% 0;">Loading...');
							$("#online .d").load('index.php/event/'+b);	
							$(".overlay").show();							
							$("#online .eventpop").show();
							 });			
			});

//	});

	$(document).click(function(e) {
        if(ani)
		return ;
//		alert(ani);
    });	

});