<style>
#link a{
padding:0 8%;	
}
</style>
<?php
if (isset($_GET['t'])||isset($_GET['d'])){
	$s="";
$f='workshop.csv';
$d=fopen($f,'r');
$ev =array();
$na=array();
$cna=array();
$n="";
$cn="";
$curr="";
while(($fr=fgetcsv($d,105,','))!==FALSE){
	if($fr[0]!=="")
	{
		if($n!=""&&$cn!=""){
			$na[$curr]=$n;
			$cna[$curr]=$cn;
			
			
			}	
	$fr[0]=str_replace(' ','_',$fr[0]);
	$e=$fr[0];	
	//$fr[0]=new event($fr[0],$fr[1],$fr[2]);
	$n=$fr[1];
	$cn=$fr[2];
	$curr=$fr[0];
	$ev[$e]=$fr[0];
	}
	else{
	if($fr[1]!="")
	$n.=':'.$fr[1];
	if($fr[2]!="")
	$cn.=':'.$fr[2];
	}
}
if(isset($_GET['t'])&&$_GET['t']=='events')
foreach ($ev as $k => $v){
	$k=str_replace('_',' ',$k);
$s.='<h1 class=wnam>'.$k.'</h1>';
}
if(isset($_GET['d'])){
		if(isset($na[$_GET['d']]))
$names=explode(':',$na[$_GET['d']]);
	if(isset($cna[$_GET['d']]))
$cnames=explode(':',$cna[$_GET['d']]);
	$k1=str_replace('_',' ',$ev[$_GET['d']]);
echo '<h1 class=en>'.$k1.'</h1>';
echo '<div class=con>';
$k2=strtolower(str_replace(' ','',$k1));
echo '<div style="font-size:1.5em;text-align:center;" id="link"><a href="index.php/event/'.$k2.'" target="_blank">Go to Site</a>';
echo '<a href="index.php/register/'.$k2.'" target="_blank">Register</a></div>';
echo '<label class=eo>Co-ordinator</label>';
	if(isset($na[$_GET['d']]))
for($i=0;$i<sizeof($names);$i++)
echo '<h3 class=onn>'.$names[$i].'</h3>';
/*
echo '<label class=co>Co-ordinator</label>';
	if(isset($cna[$_GET['d']]))
for($i=0;$i<sizeof($cnames);$i++)
echo '<h3 class=conn>'.$cnames[$i].'</h3>';echo '</div>';*/
}
	echo'<div class=pt><br> <br></div>';

echo $s;
fclose($d);}
?>