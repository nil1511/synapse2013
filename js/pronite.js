$(function(){

function c(t){
	$(document).unbind('keydown');
		$(document).keydown(function(e) {
        if(e.keyCode==27)
		{
		clo();
		}
    });
}
$('#im1').css('height',window.innerHeight/1.5);
$('#im3').css('height',window.innerHeight/1.5);
$('#im2').css('height',window.innerHeight/1.5);
$('#im4').css('height',window.innerHeight/1.5);
var ani=1;
$('.cleft').mouseover(function(e) {
	if(!ani)
	return;
	if(!e.fromElement)
	{
		clm();
		return ;
	}
	if(e.fromElement.id!='tag'&&e.fromElement.className!='cl'&&e.fromElement.className!='im1'&&e.fromElement.className!='im3'&&e.fromElement.className!='clt'){clm();}
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
	if(e.fromElement.className!='cr'&&e.fromElement.className!='im2'&&e.fromElement.className!='im4'&&e.fromElement.className!='teasar'&&e.fromElement.className!='crt'&&e.fromElement.id!='tag'){
		crm();}
});
function crm(){
		$('.crigth').animate({marginRight:'-10%'},{duration:'200',queue:false});
		$('.cleft').animate({marginLeft:'-2%'},{duration:'200',queue:false});
	}
function opendoor(){
$('#im1').animate({height:window.innerHeight/1.5},{duration:'200',queue:false});
$('#im3').animate({height:window.innerHeight/1.5},{duration:'200',queue:false});
$('#im2').animate({height:window.innerHeight/1.5},{duration:'200',queue:false});
$('#im4').animate({height:window.innerHeight/1.5},{duration:'200',queue:false});
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
function clo(){
	$(".clo").hide();
$('.crigth').animate({width:"57.75%",marginTop:'-18%'},{duration:'400',queue:false});
$('.cleft').animate({width:"53.75%",marginTop:"-5%"},{duration:'400',queue:false,complete:function(e){ani=1;}});	
//	$(".at").animate({height:"40px",top:"0%"},{duration:'400',queue:false});
$(".clt,.crt").animate({width:'150px',fontSize:'25pt',paddingTop:"0",height:"40px"},{duration:'200',queue:false});
	$("#im1 #tag").animate({height:"inherit",top:"60%"},{duration:'400',queue:false});
	$("#im3 #tag").animate({height:"inherit",top:"30%"},{duration:'400',queue:false});
	$("#im2 #tag").animate({height:"inherit",top:"60%"},{duration:'400',queue:false});
	$("#im4 #tag").animate({height:"inherit",top:"50%"},{duration:'400',queue:false});
	$('.data,.rsd').hide();
$('#im1').animate({height:window.innerHeight/1.5});
$('#im3').animate({height:window.innerHeight/1.5});
$('#im2').animate({height:window.innerHeight/1.5});
$('#im4').animate({height:window.innerHeight/1.5});
return;
	}

$(".clo").click(function(e) {
clo();
});
$('.cl').delegate("#im1", "click",function(e) {
		if(!ani)
		return;
		ani=0;
		c('cl');
		$("#im1").animate({height:window.innerHeight});
		$('.crigth').animate({width:"23.75%"},{duration:'400',queue:false});
		$('.cleft').animate({width:"87.75%"},{duration:'400',queue:false,complete:function(e){
		$("#im1 #tag").animate({height:"100%",top:"0%"},{duration:'400',queue:false});
		$("#im1 #ftag").animate({height:"100%",width:"30%"},{duration:'400',queue:false});	
		$(".v").hide();		
		$("#im1 .clo").show();
		$("#edata").show();
		$("#ed").show();
			}});
    });
	$('.cl').delegate("#im3", "click",function(e) {
		if(!ani)
		return;
		ani=0;
		c('cl');
		$('.crigth').animate({width:"23.75%"},{duration:'400',queue:false});
		$("#im3").animate({height:window.innerHeight},{duration:'400',queue:false});
		$(".cleft").animate({marginTop:'-22%'},{duration:'400',queue:false});
	$('.cleft').animate({width:"87.75%"},{duration:'400',queue:false,complete:function(e){
		$("#im3 #ftag").animate({height:"100%",width:"30%",paddingTop:"2%"},{duration:'400',queue:false});	
		$("#im3 #tag").animate({height:"100%",top:"0%"},{duration:'400',queue:false});
		$(".v").hide();
		$('#ad').show();
		$("#asd").show();
		$("#im3 .clo").show();
		}
	});
	});
	
	$('.cr').delegate("#im2", "click",function(e) {
		if(!ani)
		return;
		ani=0;
		c('cl');
		$('.crigth').animate({width:"93.75%"},{duration:'400',queue:false});
		$("#im2").animate({height:window.innerHeight},{duration:'400',queue:false});
		$(".crigth").animate({marginTop:'0%'},{duration:'400',queue:false});
		$('.cleft').animate({width:"17.75%"},{duration:'400',queue:false,complete:function(e){
		$("#im2 #tag").animate({height:"100%",top:"0%"},{duration:'400',queue:false});
		$("#im2 #ftag").animate({height:"100%",width:"30%",paddingTop:"10%"},{duration:'400',queue:false});	
		$(".v").hide();	
		$('#pd').show();	
		$("#im2 .clo").show();
		}});
	});
	$('.cr').delegate("#im4", "click",function(e) {
		if(!ani)
		return;
		ani=0;
		c('cl');
		$('.crigth').animate({width:"93.75%"},{duration:'400',queue:false});
		$("#im4").animate({height:window.innerHeight},{duration:'400',queue:false});
		$(".crigth").animate({marginTop:'-25%'},{duration:'400',queue:false});
		$('.cleft').animate({width:"17.75%"},{duration:'400',queue:false,complete:function(e){
		$("#im4 #tag").animate({height:"100%",top:"0%"},{duration:'400',queue:false});
		$("#im4 #ftag").animate({height:"100%",width:"30%"},{duration:'400',queue:false});	
		$(".v").hide();
		$("#im4 .clo").show();
		$("#yd").show();
		}});
    });
	$('#mainclose').click(function(e) {
		try{
		javascript:stopVideo();}
		catch (error){
			}
		$("#player").width(0);
		$("#trail,#register").hide();
		clo();
		$('.close').trigger('click');
		$('.cleft').css('margin-left','-60%');
		$('.cleft').css('visibility','visible');
		$('.cleft,.crigth').animate({opacity:'1'});
        $('.cleft').animate({marginLeft:"0%"},600,function(){});
		$('.crigth').css('margin-right','-70%');		
		$('.crigth').css('visibility','visible');
		$("#im1 #tag").animate({height:"inherit",top:"60%"},{duration:'400',queue:false});
		$("#im3 #tag").animate({height:"inherit",top:"30%"},{duration:'400',queue:false});
		$("#im2 #tag").animate({height:"inherit",top:"60%"},{duration:'400',queue:false});
		$("#im4 #tag").animate({height:"inherit",top:"50%"},{duration:'400',queue:false});
		$(".clt,.crt").animate({width:'150px',height:'40px',fontSize:'25pt'},{duration:'200',queue:false});
		$('.crigth').animate({marginRight:"-12%"},600,function(){});
		$('#mainclose,#content').css('visibility','collapse');
		$('.indata').hide();
		ani=1;
    });
$('.cl').delegate("#im1", "mouseover",function(e) {	
if(!ani)
return;
//	console.log(e.relatedTarget)
$('*').clearQueue();
$('#im1').animate({height:window.innerHeight/1.2},{duration:'100',queue:false});		
$('#im3').animate({height:window.innerHeight/1.8},{duration:'100',queue:false});
$('#im2').animate({height:window.innerHeight/1.5},{duration:'100',queue:false});
$('#im4').animate({height:window.innerHeight/1.5},{duration:'100',queue:false});
});

$('.cl').delegate("#im3", "mouseover",function(e) {
if(!ani)
return;
$('*').clearQueue();
$('#im1').animate({height:window.innerHeight/2},{duration:'100',queue:false});		
$('#im3').animate({height:window.innerHeight/1},{duration:'100',queue:false});
$('#im2').animate({height:window.innerHeight/1.5},{duration:'100',queue:false});
$('#im4').animate({height:window.innerHeight/1.5},{duration:'100',queue:false});
});

$('.cr').delegate("#im4", "mouseover",function(e) {	
if(!ani)
return;		
$('*').clearQueue();
$('#im1').animate({height:window.innerHeight/1.5},{duration:'100',queue:false});		
$('#im3').animate({height:window.innerHeight/1.5},{duration:'100',queue:false});
$('#im2').animate({height:window.innerHeight/1.8},{duration:'100',queue:false});
$('#im4').animate({height:window.innerHeight/1.2},{duration:'100',queue:false});
});
$('.cr').delegate("#im2", "mouseover",function(e) {	
	if(!ani)
	return;		
	$('*').clearQueue();
	$('#im1').animate({height:window.innerHeight/1.5},{duration:'100',queue:false});		
	$('#im3').animate({height:window.innerHeight/1.5},{duration:'100',queue:false});
	$('#im2').animate({height:window.innerHeight/1.2},{duration:'100',queue:false});
	$('#im4').animate({height:window.innerHeight/1.8},{duration:'100',queue:false});
});
});	
