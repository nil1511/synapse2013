<?php

define("TABLE", "synapse2013_registration");
class Forgotpassword extends Controller {
    function __construct() {
        Controller::__construct();
		$this->load->helper( 'form' );
        $this->load->database();
    }

    function verify_form() {
		$this->load->library( 'form_validation' );
        $this->form_validation->set_rules( 'email', 'E-Mail', 'required|valid_email|xss_clean|callback_exists' );
        $this->form_validation->set_message( 'exists', 'This email ID is not registered' );
		return $this->form_validation->run();
	}

    function exists($email) {
        $this->load->database();
        $query = $this->db->get_where( TABLE, array( 'email' => $email ) );
        return $query->num_rows() > 0;
    }

	function index() {
        $data = array();
        $data['errors'] = '';

        if( $this->verify_form() == FALSE ) {
        }
        else {
            $newpass = $this->gen_pass();
            $this->db->where( 'email', $this->input->post('email') );

		$mailstr = " Your new password for Synapse ( http://synapse.daiict.ac.in ) is \"$newpass\"\n";
		$mailstr .= " You should change your password at http://synapse.daiict.ac.in/index.php/changepassword\n.";
		$mailstr .= "\n -- Team Synapse\n";

            $mail_sent = mail( $this->input->post('email'), 'Synapse Password', 
                $mailstr, "From: synapse-noreply@daiict.ac.in");

/*** MAIL TO some one inside DA so that we can manually notify outside people ***/
$internal = "201101147@daiict.ac.in";
$intmsg = "Please send a mail to ".$this->input->post('email')." that his/her new password is\n".
          "'$newpass' (without quotes)\n";
if( substr( $this->input->post('email'), -strlen("daiict.ac.in") ) != "daiict.ac.in" )
	mail( $internal, "Forgot Synapse Password", $intmsg, "From: synapse-noreply@daiict.ac.in" );

/** Ends here **/

            if( $mail_sent && $this->db->update( TABLE, array( 'password' => md5($newpass) ) ) ) {
                $data['success'] = true;
            }
            else {
                $data['errors'] = "Unable to send an email. Please try a bit later";
            }
        }
        $this->load->view('forgotpassword', $data);
    }

    function gen_pass() {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $max = strlen($chars)-1;
        mt_srand( doubleval( microtime() ) * 100000 );
        $pass = '';
        for( $i = 0; $i < 8; $i++ ) {
            $pass .= $chars[mt_rand(0, $max)];
        }
        return $pass;
    }
}
?>
