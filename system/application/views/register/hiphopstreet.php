<?php
$this->load->helper('form');
$hiphop_categories = array(
	'bboying' => "B-Boying",
	'mcing' => "MC-ing"
);
?>

<tr>
<td>
<?= form_label( 'Category', '' );?>
</td>
<td>
<?= form_dropdown( 'category', $hiphop_categories );?>
</td>
</tr>
