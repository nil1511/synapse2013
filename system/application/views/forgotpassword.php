<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"> </meta>

    <title>Synapse / Forgot Password</title>
</head>
<body>

<?php if( isset($success) ): ?>
<p>A new password has been sent to your email id.</p>
<?php else: ?>
<div id="validation"><?= validation_errors(); ?></div>
<div id="errors"><?= $errors; ?></div>
<div id="email-div">
<?php
echo form_open('forgotpassword');
echo form_label( 'E-mail', 'email' );
echo form_input( 'email', set_value('email'), 'id="email"' );
echo form_submit( 'submit', 'Reclaim Password' );
echo form_close();
?>
</div>
<?php endif; ?>

</body>
</html>
