<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"> </meta>

	<link href="<?= base_url(); ?>style/alumni.css" type="text/css" rel="stylesheet" />

    <title>Accomodation at Synapse</title>

</head>
<style>
body {
    background-color: #0d0d0d;
    color: #fff;
}
#logo{
	background:url('<?= base_url(); ?>images/DAIICT2.png') no-repeat;
	width:100%;
	height:100%;
	position:fixed;
	left:10%;
	top:0;
	left:70%;
	padding:0;
	}
</style>

<div id="logo"></div>
<body>
<div id="wrapper" style="width:70%;">
<div id="main-content">

<?php if( $success ): ?>

<h1>Perfect!</h1>

<p style="width: 30%; margin: auto;">Somebody should get in contact with you shortly. For any
queries you may contact a committee member. Phone numbers
are on the <a href="http://synapse.daiict.ac.in">Synapse website</a>.</p>

<?php else: ?>

<div id="col1">
<h1>Synapse Accomodation</h1>

<p>
We want you to enjoy Synapse, wherever you may be from.
If you are looking for a place to stay, we have
accomodation for a limited number of students
on a <strong>first come, first served</strong> basis.
</p>

<p>Accomodation rates are:</p>

<table border="1">
<tr>
<th>No. of days</th>
<th>Cost/person</th>
</tr>

<tr>
<td>1</td>
<td>Rs. 250</td>
</tr>

<tr>
<td>2</td>
<td>Rs. 400</td>
</tr>

<tr>
<td>3</td>
<td>Rs. 500</td>
</tr>
</table>

<p>
Please fill in the form so our hospitality team can contact you. Thanks!
</p>

</div>
<div id="col2">

<table id="personal-details" cellspacing="20">

<?= form_open( site_url().'/accomodation'); ?>

<?php if( validation_errors() || $errors ): ?>
<div id="validation">
<p id="validation-msg">Oops! Something went wrong.</p>
<?= validation_errors()."\n<br/>\n".$errors ?>
</div>
<?php endif; ?>
<tr>
<td>
<?= form_label( 'Name', 'name' ); ?>
</td>
<td>
<?= form_input( 'name', set_value('name'), 'id="name"' ); ?>
</td>
</tr>

<tr id="email-div">
<td>
<?= form_label( 'E-mail', 'email' ); ?>
</td>
<td>
<?= form_input( 'email', set_value('email'), 'id="email"' ); ?>
</td>
</tr>

<tr>
<td>
<?= form_label( 'Telephone', 'phone' ); ?>
</td>
<td>
<?= form_input( 'phone', set_value('phone'), 'id="phone"'); ?>
</td>
</tr>

<tr>
<td>
<?= form_label( 'Institute', 'institute' ); ?>
</td>
<td>
<?= form_input( 'institute', set_value('institute') ); ?>
</td>
</tr>

<tr>
<td>
<?= form_label( 'How many people?', 'persons' ); ?>
</td>
<td>
<?= form_input( 'persons', set_value('persons') ); ?>
</td>
</tr>

<tr>
<td>
<?= form_label( 'How many days?', 'days' ); ?>
</td>
<td>
<?= form_dropdown( 'days', array('1' => '1', '2' => '2', '3' => '3'), '3'); ?>
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
