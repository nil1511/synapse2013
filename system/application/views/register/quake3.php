<?php
$this->load->helper('form');
function validate_quake3() {
    return array(
        array( 'tm2', 'Team Member 2', 'max_length[100]|xss_clean|required' ),
        array( 'tm2_college', 'Member 2 College', 'max_length[100]|xss_clean' ),
        array( 'tm3', 'Team Member 3', 'max_length[100]|xss_clean|required' ),
        array( 'tm3_college', 'Member 3 College', 'max_length[100]|xss_clean' ),
        array( 'tm4', 'Team Member 4', 'max_length[100]|xss_clean|required' ),
        array( 'tm4_college', 'Member 4 College', 'max_length[100]|xss_clean' )
    );
}
?>

<script language="javascript">
$(document).ready(function() {
    $('#participant').parent().parent().after('<tr><td colspan="2"><input type="checkbox" id="same-college">All members from the same college?</input></td></tr>');
    $("#same-college").click(function() {
        if( $('#same-college').is(':checked') )
            $('#main-content input[name^="tm"][name$="college"]').parent().parent().hide();
        else
            $('#main-content input[name^="tm"][name$="college"]').parent().parent().show();
    });
});
</script>
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
<?= form_label( 'Member 2 College', '' );?>
</td>
<td>
<?= form_input( 'tm2_college' );?>
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
<?= form_label( 'Member 3 College', '' );?>
</td>
<td>
<?= form_input( 'tm3_college' );?>
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
<?= form_label( 'Member 4 College', '' );?>
</td>
<td>
<?= form_input( 'tm4_college' );?>
</td>
</tr>

