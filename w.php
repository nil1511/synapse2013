<?php
if (isset($_GET['t'])||isset($_GET['d'])){
	$s="";
include('class.events.php');
$f='workshop.csv';
$d=fopen($f,'r');
$ev =array();
$curr="";
while(($fr=fgetcsv($d,105,','))!==FALSE){
	if($fr[0]!=="")
	{
	$fr[0]=str_replace(' ','_',$fr[0]);
	$e=$fr[0];	
	$fr[0]=new event($fr[0],$fr[1],$fr[2]);
	$curr=$fr[0];
	$ev[$e]=$fr[0];
	}
	else{
	if($fr[1]!="")
	$curr->addo($fr[1]);
	if($fr[2]!="")
	$curr->addco($fr[2]);
	}
}
if(isset($_GET['t'])&&$_GET['t']=='events')
foreach ($ev as $k => $v){
	$k=str_replace('_',' ',$k);
$s.='<h1 class=wnam>'.$k.'</h1>';
}
if(isset($_GET['d'])){
$names=explode(':',$ev[$_GET['d']]->organiser);
$cnames=explode(':',$ev[$_GET['d']]->coordinator);
	$k1=str_replace('_',' ',$ev[$_GET['d']]->name);
echo '<h1 class=en>'.$k1.'</h1>';
echo '<label class=eo>Event Organizers</label>';
for($i=0;$i<sizeof($names);$i++)
echo '<h3 class=onn>'.$names[$i].'</h3>';
echo '<label class=co>Co-ordinator</label>';
for($i=0;$i<sizeof($cnames);$i++)
echo '<h3 class=conn>'.$cnames[$i].'</h3>';}
	echo'<div class=pt><br> <br></div>';

echo $s;
fclose($d);}
?>