<?php
$this->load->helper('form');
function validate_counterstrike() {
    return array(
        array( 'dance_form', 'Team Member 2', 'max_length[100]|xss_clean' )
    );
}
?>

<tr>
<td>
<?= form_label( 'Dance form </br>(Enter any of "bollywood jazz" "hip hop" "salsa" or "combo")', '' );?>
</td>
<td>
<?= form_input( 'dance_form' );?>
</td>
</tr>
