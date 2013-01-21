<?php
$this->load->helper('form');
function validate_algorythmus() {
    return array(array( 'codechef_username', 'CodeChef Username', 'required|max_length[100]|xss_clean' ));
}
?>

<tr>
<td>
<?= form_label( 'CodeChef Username', '' );?>
</td>
<td>
<?= form_input( 'codechef_username' );?>
</td>
</tr>
