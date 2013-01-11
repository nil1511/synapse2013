<?

$sCode = '';

$sTemplate = <<<HTML
<li>
    <a href="#"><img src="{fileurl}" class="{effect}" /></a>
    <div class="label_text"><p>{title}</p></div>
</li>
HTML;

$sFolder = 'gallery/';

$aEffects = array(
    'cube', 'cubeRandom', 'block', 'cubeStop', 'cubeHide', 'cubeSize', 'horizontal', 'showBars',
    'showBarsRandom', 'tube', 'fade', 'fadeFour', 'paralell', 'blind', 'blindHeight', 'blindWidth',
    'directionTop', 'directionBottom', 'directionRight', 'directionLeft', 'cubeStopRandom', 'cubeSpread'
);

$aUnits = array(
    'pic1.jpg' => 'Image 1', 'pic2.jpg' => 'Image 2', 'pic3.jpg' => 'Image 3', 'pic4.jpg' => 'Image 4',
    'pic5.jpg' => 'Image 5', 'pic6.jpg' => 'Image 6', 'pic7.jpg' => 'Image 7', 'pic8.jpg' => 'Image 8',
    'pic9.jpg' => 'Image 9', 'pic10.jpg' => 'Image 10'
);
foreach ($aUnits as $sFileName => $sTitle) {
    $sFilePath = $sFolder . $sFileName;
    list ($iWidth, $iHeight, $vType, $vAttr) = getimagesize($sFilePath);
    $sCode .= strtr($sTemplate, array('{fileurl}' => $sFilePath, '{title}' => $sTitle, '{width}' => $iWidth, '{height}' => $iHeight, '{effect}' => $aEffects[array_rand($aEffects)]));
}

echo $sCode;

?>