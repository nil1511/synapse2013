<?php
$this->load->helper('form');
?>
<tr>
<td>
<?= form_label( 'Category' ); ?>
</td>
<td>
<?= form_dropdown( 'category', array( 'cine_smart' => 'Cine smArt', 'ad_maestro' => 'Ad Maestro', 'avatar' => 'Avatar', 'live_non-living' => 'Live the non-living' ) ); ?>
</td>
</tr>
