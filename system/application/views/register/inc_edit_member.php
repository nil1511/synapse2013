<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"> </meta>

	<link href="<?= base_url(); ?>register_styles.css" type="text/css" rel="stylesheet" />
    <style>
    #validation { color:red; font-weight:bolder; }
    </style>
    <title>INC Add/Edit Members</title>

</head>
<body>

<h1>Add/Edit INC team members</h1>

<?php if( isset( $loggedin ) ) {

echo form_begin( site_url().'/inc_members_edit/edit' );

echo form_input( 'member1', set_value('member1'), 'id="member1"'  );
echo form_close();

}
else
{

echo form_begin( site_url().'/inc_members_edit/login' );
}?>

</body>
</html>
