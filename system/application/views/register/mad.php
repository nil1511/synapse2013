<?php
$this->load->helper('form');
$cat= array(
'bollywood jazz'=>'Bollywood Jazz',
'hip hop'=>'Hip-Hop',
'bachata'=>'Bachata',
'all'=>'All'
);

function validate_mad() {
    return array(
        array( 'category', 'Category', 'required|max_length[100]|xss_clean' )
    );
}
?>
<tr>
<td>
<?= form_label( 'Category form', '' );?>
</td>
<td>
<?= form_dropdown( 'category',$cat );?>
</td>
</tr>
