<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"> </meta>

	<link href="<?= base_url(); ?>register_styles.css" type="text/css" rel="stylesheet" />

	<style>
	#done, #warn { background: #FF3636; width: 50%; padding: 20px;}
	#done { background: #A2C522; color: black; }
	</style>
	<title>Synapse / Successful Registration</title>

</head>
<body>
<h1>Registration Successful</h1>
<p>Hi <?= $name; ?>, you have 
<?php if( $already_registered ): ?>
already
<?php else: ?>
successfully
<?php endif; ?>
 registered for <strong><?= $event; ?></strong>.</p>

<h2>Details</h2>
<p>Please remember the following details, as they may be required later.</p>
<p>E-mail: <?= $email; ?></p>
<p>Team: <?= $team; ?></p>
<p>Code: <?= $code; ?></p>

<?php if( isset( $nextpage ) ): ?>
<div id="warn">
Your event requires a few more details, please <a href="<?= site_url().'/'.$nextpage; ?>">click here</a> to continue.
</div>
<?php else: ?>
<div id="done">
You may now <a onclick="window.close()" href="#">close</a> this window.
</div>
<?php endif; ?>

<hr>
<?php if( count($all_events) > 0 ): ?>
    <p>You are registered for:</p>
    <ul>
    <?php foreach( $all_events as $event ): ?>
        <li><?= $event; ?></li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>
</body>
