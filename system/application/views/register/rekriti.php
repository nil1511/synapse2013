<?php
$this->load->helper('form');
?>

<tr>
<?php /*<td>
<?= form_label( 'Year of education/Class', '' );?>
</td>
<td>
<?= form_input( 'year_of_ed' );?>
</td>
</tr>
 */ ?>

<tr>
<td>
<?= form_label( 'Type' ); ?>
</td>
<td>
<?= form_dropdown( 'rekriti_type', array( 'rekriti' => 'Rekriti', 'rekriti_junior' => 'Rekriti Jr.' ) ); ?>
</td>
</tr>

<tr>
<td>
<?= form_label( 'Idea number (for Rekriti Sr.)', '' );?>
</td>
<td>
<?= form_input( 'idea_number' );?>
</td>
</tr>
