<?php
$this->load->helper('form');
?>
<tr>
<td>
<?= form_label( 'Category' ); ?>
</td>
<td>
<?= form_dropdown( 'category', array( 'category1' => 'Category 1', 'category2' => 'Category 2' ) ); ?>
</td>
</tr>
