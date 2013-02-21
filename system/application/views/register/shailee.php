<?php
$this->load->helper('form');
?>

<tr>
<td>
<?= form_label( 'Category' ); ?>
</td>
<td>
<?= form_dropdown( 'category', array( 'writing' => 'Writing Competition', 'crossword' => 'Crossword','both'=>'Both' ) ); ?>
</td>
</tr>
