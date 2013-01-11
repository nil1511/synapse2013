<?php

$sCode = '';

$sTemplate = <<<HTML
<li>
    <img src="{fileurl}" class="{effect}" />
   <div class="label_text"><p>{title}</p></div>

</li>
HTML;

$sFolder = 'images/gallery/';

$aEffects = array(
    'cube', 'cubeRandom', 'block', 'cubeStop', 'cubeHide', 'cubeSize', 'horizontal', 'showBars',
    'showBarsRandom', 'tube', 'fade', 'fadeFour', 'paralell', 'blind', 'blindHeight', 'blindWidth',
    'directionTop', 'directionBottom', 'directionRight', 'directionLeft', 'cubeStopRandom', 'cubeSpread'
);
$aUnits = array();

$dir = opendir($sFolder);
while(($t = readdir($dir)) != false){
	if(($t != ".")&&($t != ".."))
	{
	if(strchr($t,'.jpg')){
		$sFilePath=$sFolder.$t;
    list ($iWidth, $iHeight, $vType, $vAttr) = getimagesize($sFilePath);
	$info = pathinfo($sFilePath);
	$n=basename($t,'.'.$info['extension']);	
    $sCode .= strtr($sTemplate, array('{fileurl}' => $sFilePath, '{title}' => $n , '{width}' => $iWidth, '{height}' => $iHeight, '{effect}' =>	 $aEffects[array_rand($aEffects)]));
		}
	}
}
	echo $sCode;
?>