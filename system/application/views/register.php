<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"> </meta>
    <script type="text/javascript" language="javascript" src="js/jquery-1.8.3.min.js"> </script>
	<script type="text/javascript" language="javascript">
	var Register = {
		setup: function() {
			Register.attachLoginListener();
			Register.attachCheckboxListener();
			Register.attachAccomodationListener();
            Register.attachConfirmListener();
			Register.checkboxHandler();
			Register.accomodationHandler();
            $('#student-id').focus();
		},
        attachConfirmListener : function() {
        },
		attachLoginListener : function() {
			$('#password').blur( Register.userExists );
            // when the user enters wrong password and field gets focused,
            // suppose he wants to change username instead and blurs
            // password field. It will just refocus since userExists
            // gets called again. Instead re-register handler only
            // when password content changes
            // and unregister it when wrong password happens
            $('#password').change( function() {
                $('#password').blur( Register.userExists ).css("background", "white");
            });
			$('#student-id').blur( Register.userExists );
			$('#email').blur( Register.userExists );
		},
		attachCheckboxListener : function() {
			$('#da-student').click( Register.checkboxHandler );
		},
		attachAccomodationListener : function() {
			$('#accomodation').click( Register.accomodationHandler );
		},
        clearForm : function() {
            $('form input[type!="submit"]').filter('input[type!="checkbox"]').filter('input[type!="hidden"]').val("");
        },
		checkboxHandler : function() {
            Register.resetNotification();
            Register.clearForm();
			if( $('#da-student').is(':checked') ) {
				$('#student-id-div').show();
                $('#student-id').focus();
				$('#email-div').hide();
				$('#institution-div').hide();
				$('#accomodation-div').hide();
			}
			else {
				$('#student-id-div').hide()
				$('#email-div').show();
                $('#email').focus();
				$('#institution-div').show();
				$('#accomodation-div').show();
			}
		},
		accomodationHandler : function() {
			if( $('#accomodation').is(':checked') ) {
				$('#accomodation-count-div').show();
                $('#accomodation_count').focus();
			}
			else {
				$('#accomodation-count-div').hide();
			}
		},

        displayNotification: function(text) {
            $('#login-notification').show();
            $('#login-notification').html(text);

            var err = arguments[1] || false;
            if( err ) {
                $('#login-notification').css( { "color" : "red" } );
            }
            else {
                $('#login-notification').css( { "color" : "green" } );
            }
        },

		resetNotification: function() {
            $('#login-notification').hide();
			//$('confirm-password-div').style.display = "";
			//$('login-notification').style.display = "none";
			$('#login-notification').html("");
		},

		userExists : function() {
			if( ($('#student-id').val() == "" && $('#email').val() == "") || $('#password').val() == "" ) {
				Register.resetNotification();
				return;
			}

            var params = $('#da-student, #student-id, #email, #password').serialize();
            $.post( '<?= site_url(); ?>/register/ajaxuserexists'
                ,  params
                ,  function( data, stat ) {
                       if( data.available == 'true' ) {
                           if( $('#da-student').is(':checked') && $('#student-id').val().match(/200[0-9]{6}/) ) {
                               $('#student-id').css( { "background-color" : "green"} );
                            }
                           else if( $('#email').val().match(/[^@]*@[^\s]*/) ) {
                               $('#email').css( { "background-color" : "green"} );
                            }
                           Register.displayNotification("Available");
                       }
                       else {
                           if( data.success === true ) {
                               Register.displayNotification("Welcome back " + data.name);
                               $('#participant').val(data.name);
                               $('#phone').val(data.phone);
                               $('#institution').val(data.institution);

                               $('#confirm-password-div').hide();
                               $('#team-name').focus();
                               $('#team-name').css( { "background-color" : "yellow" } );
                               return;
                            }
                           else if( data.available === true ) {
                               Register.displayNotification("Username available!");
                               $('#participant').val("");
                               $('#phone').val("");
                               $('#institution').val("");

                               $('#confirm-password-div').show();
                               $('#confirm-password').css( { "background-color" : "yellow" } );
                            }
                           else {
                               Register.displayNotification("Login failed!", true);
                               $('#password').unbind('blur', Register.userExists);
                               $('#password').css( { "background-color" : "red" } );
                               $('#password').focus();
                               $('#participant').val("");
                               $('#phone').val("");
                               $('#institution').val("");

                               $('#confirm-password-div').hide();
                           }
                        }
                   }
                , "json"
            );
		}
	};
    $(document).ready(Register.setup);
	</script>
    <title>Synapse Registration : <?= $event_name; ?></title>

</head>
<body>

<div id="wrapper">
<div id="main-content">

<h1>Register for <?= $event_name ?></h1>

<p>Instructions:</p>
<ul>
<li>If you have previously registered for any event, make sure you use the same password.</li>
<li>DA-IICT students are <strong>required</strong> to use their webmail IDs as email</li>
<li>For team events, THE TEAM LEADER SHOULD REGISTER. Do NOT put in your own details if you are not the team leader.</li>
<li>All fields are <strong>MANDATORY</strong></li>
<li><a href="<?= site_url() ?>/forgotpassword">Forgot your password?</a></li>
<li><a href="<?= site_url() ?>/changepassword">Change Password</a></li>
</ul>

<?= form_open( site_url().'/register/'.$selected_event ); ?>

<?= form_hidden('event', $selected_event ); ?>
<table id="personal-details">

<?php if( validation_errors() || $errors ): ?>
<div id="validation">
<?= validation_errors()."\n<br/>\n".$errors ?>
</div>
<?php endif; ?>

<tr id="login-notification">
</tr>

<tr>
<td colspan="2">
<input type="checkbox" name="da_student" id="da-student" value="true" <?= set_checkbox('da_student', 'true', true) ?> >Are you a DA-IICT student?</input>
</td></tr>

<tr id="student-id-div">
<td>
<?= form_label( 'Student ID', 'da_student_id' );?>
</td>
<td>
<?= form_input( 'da_student_id', set_value('da_student_id'), 'id="student-id"' ); ?>
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
<?= form_label( 'Password', 'password' ); ?>
</td>
<td>
<?= form_password( 'password', '', 'id="password"' ); ?>
</td>
</tr>

<tr id="confirm-password-div">
<td>
<?= form_label( 'Confirm Password', 'confirm_password' ); ?>
</td>
<td>
<?= form_password( 'confirm_password', '', 'id="confirm-password"' ); ?>
</td>
</tr>

<tr id="institution-div">
<td>
<?= form_label( 'Institution', 'institution' ); ?>
</td>
<td>
<?= form_input( 'institution', set_value('institution'), 'id="institution"' ); ?>
</td>
</tr>

<tr>
<td>
<?= form_label( 'Phone number', 'phone' ); ?>
</td>
<td>
<?= form_input( 'phone', set_value('phone'), 'id="phone"'); ?>
</td>
</tr>

</table>

<table id="event-details">

<tr>
<th>Team details</th>
</tr>

<tr>
<td>
<?= form_label( 'Team Name', 'teamname' );?>
<br><i>(Enter N/A for individual event.)</i>
</td>
<td>
<?= form_input( 'teamname', set_value('teamname'), 'id="team-name"' );?>
</td>
</tr>

<tr>
<td>
<?= form_label( 'Participant/Team Leader', 'participant' ); ?>
</td>
<td>
<?= form_input( 'participant', set_value('participant'), 'id="participant"' ); ?>
</td>
</tr>
	
<?php
if( isset($event_view) )
	echo $event_view;
?>
	
<tr id="accomodation-div">
<td colspan="2">
<input type="checkbox" name="accomodation" id="accomodation" value="true" <?=set_checkbox('accomodation', 'true', false)?>>Do you require accomodation?</input>
</td>
</tr>

<tr id="accomodation-count-div">
<td>
<?= form_label( 'For how many?', 'accomodation_count' );?>
</td>
<td>
<?= form_input( 'accomodation_count', set_value('accomodation_count'), 'id="accomodation_count"' );?>
</td>
</tr>
	
<tr>
<td>
</td>
<td>
<?= form_submit( 'submit', 'Register' );?>
</td>
</tr>

<?= form_close();?>

</table>

</div>
</div>
</body>
</html>
