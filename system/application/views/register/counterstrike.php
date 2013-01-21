<?php
$this->load->helper('form');
function validate_counterstrike() {
    return array(
        array( 'tm2', 'Team Member 2', 'max_length[100]|xss_clean' ),
        array( 'tm3', 'Team Member 3', 'max_length[100]|xss_clean' ),
        array( 'tm4', 'Team Member 4', 'max_length[100]|xss_clean' ),
        array( 'tm5', 'Team Member 5', 'max_length[100]|xss_clean' )
    );
}
?>

<tr>
<td>
<?= form_label( 'Team Member 2', '' );?>
</td>
<td>
<?= form_input( 'tm2' );?>
</td>
</tr>

<tr>
<td>
<?= form_label( 'Team Member 3', '' );?>
</td>
<td>
<?= form_input( 'tm3' );?>
</td>
</tr>

<tr>
<td>
<?= form_label( 'Team Member 4', '' );?>
</td>
<td>
<?= form_input( 'tm4' );?>
</td>
</tr>

<tr>
<td>
<?= form_label( 'Team Member 5', '' );?>
</td>
<td>
<?= form_input( 'tm5' );?>
</td>
</tr>
