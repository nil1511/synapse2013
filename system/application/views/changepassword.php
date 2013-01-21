<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"> </meta>

    <title>Synapse / Change Password</title>
	<style>
	label {
		width: 25%;
		margin: 15px 25px 15px 0;
		padding-top: 500px;
	}
	</style>
</head>
<body>

<?php if( isset($success) ): ?>
<p>Password changed!</p>
<?php else: ?>
<div id="validation"><?= validation_errors(); ?></div>
<div id="errors"><?= $errors; ?></div>
<?php
echo form_open('changepassword');
echo form_label( 'E-mail', 'email' );
echo form_input( 'email', set_value('email'), 'id="email"' );
echo "<br>\n";

echo form_label( 'Old Password', 'oldpassword' );
echo form_password( 'oldpassword' );
echo "<br>\n";

echo form_label( 'New Password', 'newpassword' );
echo form_password( 'newpassword' );
echo "<br>\n";

echo form_label( 'Confirm New Password', 'confirmnewpassword' );
echo form_password( 'confirmnewpassword' );
echo "<br>\n";

echo form_submit( 'submit', 'Change Password' );
echo form_close();
?>
<?php endif; ?>

</body>
</html>
