<?php
$this->load->helper('form');
$rhapsody_categories = array(
	'soloindian' => "Solo: Indian Vocal",
	'solowestern' => "Solo: Western Vocal",
	'groupindian' => "Group: Indian Vocal",
	'groupwestern' => "Group: Western Vocal",
	'instrumental' => "Instrumental",
	'bollyrock' => "BollyRock"
);
?>

<tr>
<td>
<?= form_label( 'Category', 'category' );?>
</td>
<td>
<?= form_dropdown( 'category', $rhapsody_categories );?>
</td>
</tr>
