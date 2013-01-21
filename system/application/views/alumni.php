<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"> </meta>

	<link href="<?= base_url(); ?>style/alumni.css" type="text/css" rel="stylesheet" />

<style>
body {
    background-color: #590209;
    color: #F2B705;
}
#main-content {
    height: 700px;
}

</style>

    <title>Synapse Alumni</title>

</head>
<body>

<div id="wrapper">
<div id="main-content">

<?php if( $success ): ?>

<h1>Perfect!</h1>

<p style="width: 30%; margin: auto;">Somebody should get in contact with you shortly. For any
queries you may contact a committee member. Phone numbers
are on the <a href="http://synapse.daiict.ac.in">Synapse website</a>.</p>

<?php else: ?>

<div id="col1">

<p>
We the students of DA-IICT, Gandhinagar take immense pleasure in inviting you, that is the college's alumni to your alma mater's annual techno-cultural festival &mdash; Synapse. Synapse 2013 is being organised during 28th February, 2013-3rd March. This student run festival has, over the past seven years since its inception, grown by leaps and bounds every year to acquire the status of one of the leading college fests of India.
In a nation which lives and breathes cinema, this year we bring Synapse to you in a never seen before avatar of &ldquo;The Carnival!&rdquo;.
For quite some time now, we've been interacting with some of our alumni who wish to contribute towards Synapse but don't find a channel to do the same. This portal is also a step in that direction. It allows you to support Synapse from the convenience of your home, college or workplace. The idea is to keep all monetary transactions online.
</p>

<p>
We will acknowledge all contributions that are greater than a sum of Rs. 1,000/- by sending you a goodie bag containing a Synapse T-shirt, Synapse mug and other such gifts to the address specified by you.</p>

<p>
Your small gesture means the world to us. Help us in associating the alumni with Synapse.
</p>

<p>Simply fill out the form and a committee member will contact you to verify the details and give you details on how to transfer the money.</p>

<p style="font-size: 120%">
<strong>Thank you.</strong>
</p>

</div>

<div id="col2">

<table id="personal-details" cellspacing="20">

<?= form_open( site_url().'/alumni'); ?>

<?php if( validation_errors() || $errors ): ?>
<div id="validation">
<p id="validation-msg">Oops! Something went wrong.</p>
<?= validation_errors()."\n<br/>\n".$errors ?>
</div>
<?php endif; ?>
<tr>
<td>
<?= form_label( 'Name', 'name' ); ?>
<br><span class="sublabel">Obvious.</span>
</td>
<td>
<?= form_input( 'name', set_value('name'), 'id="name"' ); ?>
</td>
</tr>

<tr id="email-div">
<td>
<?= form_label( 'E-mail', 'email' ); ?>
<br><span class="sublabel">We never spam.</span>
</td>
<td>
<?= form_input( 'email', set_value('email'), 'id="email"' ); ?>
</td>
</tr>

<tr>
<td>
<?= form_label( 'Telephone', 'phone' ); ?>
<br><span class="sublabel">Do you exist?</span>
</td>
<td>
<?= form_input( 'phone', set_value('phone'), 'id="phone"'); ?>
</td>
</tr>

<tr>
<td>
<?= form_label( 'Address', 'address' ); ?>
</td>
<td>
<?= form_textarea( array('name' => 'address', 'rows' => 7, 'cols' => 17), ''); ?>
</td>
</tr>

<tr>
<td>
<?= form_label( 'T-shirt Size', 'tsize' ); ?>
<br><span class="sublabel">So it fits</span>
</td>
<td>
<?= form_dropdown( 'tsize', array('S' => 'Small', 'M' => 'Medium', 'L' => 'Large', 'X' => 'Extra Large'), 'L'); ?>
</td>
</tr>

<tr>
<td>
</td>
<td>
<?= form_submit( 'submit', 'Submit' );?>
</td>
</tr>

<?= form_close();?>

</table>
<?php endif; ?>
</div>

</div>
</div>
</body>
</html>
