<?php
$this->load->helper('form');
$footloose_categories = array(
	'solo' => "Solo",
	'group' => "Group",
	'duet' => "Duet",
);
?>

<tr>
<td>
<?= form_label( 'Category', 'category' );?>
</td>
<td>
<?= form_dropdown( 'category', $footloose_categories );?>
</td>
</tr>
