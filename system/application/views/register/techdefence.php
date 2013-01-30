<?php
$this->load->helper('form');
function validate_techdefence() { 
 return array(
        array( 'payment_method', 'Paymant Type', 'required|max_length[100]|xss_clean' ),
		array( 'payment_code', 'Paymant No.', 'required|max_length[100]|xss_clean' )
    );
}
?>
<tr  class="tech">
<td>
<?= form_label( 'Payment Type' ); ?>
</td>
<td>
<?= form_dropdown( 'payment_method', array( 'dd' => 'Demand Draft', 'online' => 'Online' ) ); ?>
</td>
</tr>
<tr  class="tech">
<td>
<?= form_label( 'DD No. or Online Transaction No.', '' );?>
</td>
<td>
<?= form_input( 'payment_code' );?>
</td>
</tr>