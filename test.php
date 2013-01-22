<?php
$f='events.json';
$d2=json_decode(fread($d=fopen($f,'r'),filesize($f)),true);

//0 for cult 1 for tech and so on

$c=$d2['children'][2]['children'];
for($i=0;$i<sizeof($c);$i++){
echo 	$c[$i]["name"].'<br>';
for($j=0;isset($c[$i]['children'])&&$j<sizeof($c[$i]['children']);$j++){
	if(isset($c[$i]['children'])){
	echo '--'.$c[$i]['children'][$j]['name'].'<br>';}
	}	
}
?>